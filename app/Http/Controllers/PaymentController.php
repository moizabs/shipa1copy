<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\Token;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        Log::info('Request data:', $request->all());

        $amount = $request->amount;
        $cardNumber = $request->card_number;
        $cardExpiryMonth = $request->cardexpirydate;
        $cardCvc = $request->csvno;
        $cardCvc = env('STRIPE_SECRET');

        Stripe::setApiKey(env('STRIPE_SECRET'));
        
        try {
            // Create a token
            $token = Token::create([
                'card' => [
                    'number' => $cardNumber,
                    'exp_month' => explode('/', $cardExpiryMonth)[0],
                    'exp_year' => explode('/', $cardExpiryMonth)[1],
                    'cvc' => $cardCvc,
                ],
            ]);

            // Create a charge
            $charge = Charge::create([
                'amount' => $amount * 100, // Amount in cents
                'currency' => 'usd',
                'source' => $token->id,
                'description' => 'One-time payment',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Payment successful!',
                'charge' => $charge
            ]);
        } catch (\Exception $e) {
            Log::error('Payment error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Payment error: ' . $e->getMessage()
            ], 500);
        }
    }
}
