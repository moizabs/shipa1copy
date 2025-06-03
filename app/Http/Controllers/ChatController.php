<?php

namespace App\Http\Controllers;

use App\Models\ThreadTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;
use App\Models\Chat;
use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use Carbon\Carbon;
class ChatController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */

    public function index(Request $request)
    {
        $user_id = isset($request->user_id) ? $request->user_id : 0;
        $user_name = isset($request->user_name) ? $request->user_name : null;
        $admin = !empty($user_id) ? true : false;
        $domain = $request->headers->get('referer') ?? $request->getHost();
        if (empty($domain)) {
            $domain = $admin ? 'https://washington.shawntransport.com' : 'https://www.shipa1.com';
        }
        $domain = parse_url($domain, PHP_URL_SCHEME) . "://" . parse_url($domain, PHP_URL_HOST);
        $cookieName = 'device_id_chat_' . str_replace('.', '_', $domain);

        if (!request()->hasCookie($cookieName)) {
            $deviceId = Str::uuid(); // Generate a unique ID
            cookie()->queue(cookie($cookieName, $deviceId, 525600, '/', null, true, true, false, 'None'));
        } else {
            $deviceId = request()->cookie($cookieName);
        }

        return view('iframe.dashboard')->with(['user_id' => $user_id, 'admin' => $admin, 'deviceId' => $deviceId,'domain'=>$domain,'user_name'=>$user_name]);
    }

    public function iframe(Request $request){

        return view('iframe');
    }


    public function chat_old(Request $request){
        try {
            $apiKey = config('app.gpt_code');
            $model = $request->post('model');
            $content = $request->post('content');
            $personality = $request->post('personality'); // Assuming 'personality' is sent in the request

            // Customize instructions or preprocess content based on the selected personality
            $instructions = "Your default instructions...";

            if ($personality === 'formal') {
                $instructions = "Use formal language and tone...";
            } elseif ($personality === 'friendly') {
                $instructions = "Be friendly and approachable...";
            } elseif ($personality === 'humorous') {
                $instructions = "Add humor to the responses...";
            }

            /** @var string $responseBody */
            $responseBody = Http::withHeaders([
                "Content-Type" => "application/json",
                "Authorization" => "Bearer $apiKey"
            ])->post('https://api.openai.com/v1/chat/completions', [
                "model" => $model,
                "messages" => [
                    [
                        "role" => "system",
                        "content" => $instructions,
                    ],
                    [
                        "role" => "user",
                        "content" => $content,
                    ],
                ],
                "temperature" => 0,
                "max_tokens" => 1000
            ])->body();
            dd($responseBody);
            /** @var array $response */
            $response = json_decode($responseBody, true);

            // Check if 'choices' is present in the response
            if (isset($response['choices'][0]['message']['content'])) {
                $res = $response['choices'][0]['message']['content'];
                $chat = new Chat();
                $chat->user_id =auth()->id();
                $chat->send_message = $content;
                $chat->receive_message = $res;
                $chat->date_created = date('Y-m-d');
                $chat->save();

                return $res;
            } else {
                return "Unexpected response format.";
            }
        } catch (Throwable $e) {
            return "Chat GPT Limit Reached. This means too many people have used this demo this month and hit the FREE limit available. You will need to wait, sorry about that.";
        }
    }

    public function chat(Request $request){
        try {
            $domain = $request->reference_domain;

            $deviceId = request()->cookie('device_id_chat_' . str_replace('.', '_', $domain));
            if (!$deviceId) {
                // Optional fallback
                $deviceId = Str::uuid();
                // Or: return response()->json(['error' => 'Device ID not found'], 400);
            }
            $user_name = isset($request->user_name) ? $request->user_name : null;
            $today = date('Y-m-d');
            if($request->admin == 1){
                $thread = ThreadTable::find($request->thread_id);
            }else{
                $thread = ThreadTable::where('ip_address', $deviceId)->whereDate('created_at', $today);
                if($thread->exists()){
                    $thread = $thread->first();
                }else{
                    $thread = new ThreadTable();
                    $thread->name  = $request->name;
                    $thread->email  = $request->email;
                }
            }
            $thread->user_id = $request->user_id;
            $thread->ip_address = ($request->admin == 1) ? $thread->ip_address : $deviceId;
            $thread->replied = ($request->user_id == 0) ? 0 : 1;
            $thread->save();

            $ipAddress = $request->ip();
            $client = new Client();
            try {
                $response = $client->get("http://ipinfo.io/{$ipAddress}/json");
                $locationData = json_decode($response->getBody(), true);

                $country = isset($locationData['country']) ? $locationData['country'] : '-';
                $city = isset($locationData['city']) ? $locationData['city'] : '-';
                $region = isset($locationData['region']) ? $locationData['region'] : '-';
            } catch (\Exception $e) {
                // Handle any errors gracefully
                $country = '-';
                $city = '-';
                $region = '-';
            }

            $chat = new Chat();
            $chat->thread_id = $thread->id;
            $chat->send_message = ($request->admin == 0) ? $request->input('content') : null ;
            $chat->receive_message = ($request->admin == 1) ? $request->input('content') : null ;
            $chat->date_created = date('Y-m-d');
            $chat->ip_address = $deviceId;
            $chat->read_it = ($request->admin == 1) ? 1 : 0;
            $chat->read_it_c = ($request->admin == 0) ? 1 : 0;
            $chat->info_data = "{$country},{$city},{$region},{$ipAddress}";
            $chat->admin_name = !empty($user_name) ? $user_name : null;
            $chat->save();
            return response()->json(['data' => $chat, 'status' => 0]);;

        } catch (Throwable $e) {

            return "Something Went Wrong Contact Support";
        }
    }

    public function chat_history(Request $request){

        $threads = ThreadTable::where(function ($query) use($request){
            if(!empty($request->thread_id)){
                $query->where('id',$request->thread_id);
            }else {
                $query->where('ip_address', $request->ip_address)->whereDate('created_at', $request->date_created);
            }
        })
            ->latest()->first();
        if(!empty($threads)) {
            $chats = Chat::where('thread_id', $threads->id)
                ->where(function ($qeury) use($request){
                    if(!empty($request->keyword)){
                        $qeury->where('send_message',$request->keyword);
                        $qeury->orwhere('receive_message',$request->keyword);
                    }
                })
                ->orderBy('id', 'asc')
                ->get();
            if (count($chats) > 0) {
                return response()->json(['data' => $chats, 'status' => 1]);
            } else {
                return response()->json(['data' => $chats, 'status' => 0]);
            }
        }else{
            return response()->json(['data' => [], 'status' => 0]);
        }

    }

    public function show_history(Request $request){

        $date = Carbon::parse($request->date_created);
        $chats = Chat::select(
            'chats.date_created',
            'chats.thread_id',
            'chats.ip_address',
            'chats.admin_name',
            'chats.id',
            'thread_tables.replied',
            'thread_tables.name',
            DB::raw('(SELECT COUNT(chats_count.read_it)
                  FROM chats AS chats_count
                  WHERE chats_count.thread_id = chats.thread_id and chats_count.read_it = 0) AS tc') ,
            DB::raw('(SELECT COUNT(chats_count.read_it_c)
                  FROM chats AS chats_count
                  WHERE chats_count.thread_id = chats.thread_id and chats_count.read_it_c = 0) AS tc_c')
        )
            ->leftJoin('thread_tables', 'thread_tables.id', '=', 'chats.thread_id')
            #->where('chats.date_created', $request->date_created)
            ->whereBetween('chats.date_created', [
                $date->copy()->subDay()->startOfDay(),  // Yesterday start
                $date->copy()->endOfDay()               // Today end
            ])
            ->groupBy('chats.thread_id') // Ensures distinct thread_id
            ->orderBy('chats.id', 'desc') // Ensures latest records are selected
            ->get();

        return response()->json($chats);

    }

    public function ChatUpdateRead(Request $request){
        if($request->type == 1){
            $chats = Chat::where('thread_id',$request->thread_id)->update(['read_it'=>1]);
        }else{
            $chats = Chat::where('thread_id',$request->thread_id)->update(['read_it_c'=>1]);
        }

    }

}
