<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FAQsController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FormVehicleController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\OrderFormController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReviewSiteController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\PortToPortController;
use App\Http\Controllers\Admin\PortDetailController;
use App\Http\Controllers\Admin\NationWideTransportController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\ChatController;


Route::get('chat_dashboard', [ChatController::class, 'index'])->name('chat.dashboard');
Route::get('iframe', [ChatController::class, 'iframe'])->name('chat.iframe');

Route::post('chat', [ChatController::class, 'chat'])->name('chat.post');
Route::get('chat_history', [ChatController::class, 'chat_history'])->name('chat.chat_history');
Route::get('show_history', [ChatController::class, 'show_history'])->name('chat.show_history');
Route::get('ChatUpdateRead', [ChatController::class, 'ChatUpdateRead'])->name('chat.ChatUpdateRead');

Route::get('/', [FrontendController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog/trailers-and-trucks-used-in-transportation', [FrontendController::class, 'blogsTrailerTruck'])->name('blogs.trailer.truck');
Route::get('/blog/{slug}', [FrontendController::class, 'blogDetails'])->name('blog.details');
Route::get('/about_us', [FrontendController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact_us', [FrontendController::class, 'contactUs'])->name('contactUs');
Route::get('/transport-services', [FrontendController::class, 'services'])->name('services');
Route::prefix('transport-services')->group(function () {
    Route::get('/car', [FrontendController::class, 'carService'])->name('frontend.pages.services.car-service');
    Route::get('/motorcycle', [FrontendController::class, 'bikeService'])->name('frontend.pages.services.bike-service');
    Route::get('/atv-utv', [FrontendController::class, 'atvutvService'])->name('frontend.pages.services.atv-utv-service');
    Route::get('/golf-cart', [FrontendController::class, 'golfcartService'])->name('frontend.pages.services.golf-cart-service');
    Route::get('/boat', [FrontendController::class, 'boatService'])->name('frontend.pages.services.boat-service');
    Route::get('/commercial-truck', [FrontendController::class, 'commercialService'])->name('frontend.pages.services.commercial-service');
    Route::get('/construction-equipment', [FrontendController::class, 'constructionService'])->name('frontend.pages.services.construction-service');
    Route::get('/excavator', [FrontendController::class, 'excavatorService'])->name('frontend.pages.services.excavator-service');
    Route::get('/farm-equipment', [FrontendController::class, 'farmService'])->name('frontend.pages.services.farm-service');
    Route::get('/freight', [FrontendController::class, 'freightService'])->name('frontend.pages.services.freight-service');
    Route::get('/heavy-equipment', [FrontendController::class, 'heavyService'])->name('frontend.pages.services.heavy-service');
    Route::get('/rv', [FrontendController::class, 'rvService'])->name('frontend.pages.services.rv-service');
    Route::get('/hazmat', [FrontendController::class, 'hazmatService'])->name('frontend.pages.services.hazmat-service');
    Route::get('/reefer', [FrontendController::class, 'reeferService'])->name('frontend.pages.services.reefer-service');
    Route::get('/dry-van', [FrontendController::class, 'dryvanService'])->name('frontend.pages.services.dryvan-service');
    // Service detail
    Route::get('/services/{slug}', [FrontendController::class, 'serviceDetails'])->name('service.details');
});
Route::get('/marketing', [FrontendController::class, 'marketing'])->name('marketing');
Route::prefix('')->group(function () {
    Route::get('/Vehicle-Transportation-In-Connecticut', [FrontendController::class, 'vehicleTransportInConnecticut'])->name('frontend.pages.marketing.vehicleTransportInConnecticut');
    Route::get('/Vehicle-Transportation-In-Newyork', [FrontendController::class, 'vehicleTransportInNewyork'])->name('frontend.pages.marketing.vehicleTransportInNewyork');
    Route::get('/Vehicle-Transportation-Florida', [FrontendController::class, 'vehicleTransportInFlorida'])->name('frontend.pages.marketing.vehicleTransportInFlorida');
    Route::get('/Vehicle-Transportation-Washington', [FrontendController::class, 'vehicleTransportInWashington'])->name('frontend.pages.marketing.vehicleTransportInWashington');
    Route::get('/Vehicle-Transportation-In-New-Hampshire', [FrontendController::class, 'vehicleTransportInHampshire'])->name('frontend.pages.marketing.vehicleTransportInHampshire');
    Route::get('/Vehicle-Transportation-Maryland', [FrontendController::class, 'vehicleTransportInMaryland'])->name('frontend.pages.marketing.vehicleTransportInMaryland');
    Route::get('/Vehicle-Transportation-In-Illinois', [FrontendController::class, 'vehicleTransportInIllinois'])->name('frontend.pages.marketing.vehicleTransportInIllinois');
    Route::get('/Vehicle-Transportation-In-Michigan', [FrontendController::class, 'vehicleTransportInMichigan'])->name('frontend.pages.marketing.vehicleTransportInMichigan');
    Route::get('/Vehicle-Transportation-In-Virginia', [FrontendController::class, 'vehicleTransportInVirginia'])->name('frontend.pages.marketing.vehicleTransportInVirginia');
    Route::get('/Vehicle-Transportation-In-NorthCarolina', [FrontendController::class, 'vehicleTransportInNorthCarolina'])->name('frontend.pages.marketing.vehicleTransportInNorthCarolina');
    Route::get('/Vehicle-Transportation-In-Texas', [FrontendController::class, 'vehicleTransportInTexas'])->name('frontend.pages.marketing.vehicleTransportInTexas');
    Route::get('/Vehicle-Transportation-In-Indiana', [FrontendController::class, 'vehicleTransportInIndiana'])->name('frontend.pages.marketing.vehicleTransportInIndiana');
    Route::get('/Vehicle-Transportation-In-Colorado', [FrontendController::class, 'vehicleTransportInColorado'])->name('frontend.pages.marketing.vehicleTransportInColorado');
    Route::get('/Vehicle-Transportation-In-California', [FrontendController::class, 'vehicleTransportInCalifornia'])->name('frontend.pages.marketing.vehicleTransportInCalifornia');
    Route::get('/Vehicle-Transportation-In-Arizona', [FrontendController::class, 'vehicleTransportInArizona'])->name('frontend.pages.marketing.vehicleTransportInArizona');
});

Route::prefix('auction-transport')->group(function () {
    Route::get('/car', [FrontendController::class, 'autoAuction'])->name('autoAuction');
    Route::get('/heavy-equipment', [FrontendController::class, 'heavyAuction'])->name('heavyAuction');
    Route::get('/freight', [FrontendController::class, 'thirdPartyLogistics'])->name('thirdPartyLogistics');

});
Route::prefix('instant-quote')->group(function () {
    Route::get('/', [FormVehicleController::class, 'quoteForm'])->name('quote.form.combine');
    Route::get('/atv-utv', [FormVehicleController::class, 'atv_utv'])->name('form.vehicle.atv_utv');
    Route::get('/car', [FormVehicleController::class, 'car'])->name('form.vehicle.car');
    Route::get('/motorcycle', [FormVehicleController::class, 'motorcycle'])->name('form.vehicle.form.vehicle.car');
    Route::get('/golf-cart', [FormVehicleController::class, 'golf_cart'])->name('form.vehicle.golf_cart');
    Route::get('/boat', [FormVehicleController::class, 'boat'])->name('form.vehicle.boat');
    Route::get('/heavy-equipment', [FormVehicleController::class, 'heavyEquipment'])->name('form.vehicle.heavyEquipment');
    Route::get('/commercial-truck', [FormVehicleController::class, 'commercialTruck'])->name('commercial.truck.transport');
    Route::get('/construction_equipment', [FormVehicleController::class, 'constructionTransport'])->name('frontend.forms.construction_transport');
    Route::get('/excavator', [FormVehicleController::class, 'excavator'])->name('frontend.forms.excavator');
    Route::get('/farm-equipment', [FormVehicleController::class, 'farmTransport'])->name('frontend.forms.farm_transport');
    Route::get('/rv', [FormVehicleController::class, 'rvTransport'])->name('frontend.forms.rv_transport');
    Route::get('/hazmat', [FrontendController::class, 'hazmatTransport'])->name('frontend.forms.hazmattransport');
    Route::get('/dry-van', [FrontendController::class, 'dryVan'])->name('frontend.forms.dryvan');
    Route::get('/reefer', [FrontendController::class, 'reeferTrucking'])->name('frontend.forms.reefertrucking');
    Route::get('/roro', [FormVehicleController::class, 'roro'])->name('form.vehicle.roro');

});

Route::get('/nationwide-autotransport', [FrontendController::class, 'nationwideAutotransport'])->name('frontend.pages.nationwide-autotransport');
Route::get('/nationwide-autotransport/{slug}', [FrontendController::class, 'getNationWideData'])->name('get.nation.data');
Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('newsletter.subscribe');
Route::post('contact_messages', [ContactMessageController::class, 'store'])->name('contact_messages.store');
Route::get('order_tracking', [FrontendController::class, 'orderTracking'])->name('order.tracking');
Route::get('/terms_and_conditions', [FrontendController::class, 'termsAndConditions'])->name('termsAndConditions');
Route::get('/frequently-asked-questions', [FrontendController::class, 'faq'])->name('faq');
Route::get('/privacy_policy', [FrontendController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/thank-you', [FrontendController::class, 'thankYou'])->name('thankYou');
Route::get('/freight', [FormVehicleController::class, 'freight'])->name('form.vehicle.freight');
Route::get('/roro-shipping-international', [FrontendController::class, 'roroService'])->name('frontend.pages.services.roro-service');
Route::get('/recreational-vehicle', [FormVehicleController::class, 'recreationalVehicle'])->name('form.recreational-vehicle');
Route::get('/vehicle-transportation-detail', [FrontendController::class, 'vehicleTransportDetail'])->name('vehicleTransportDetail');
Route::get('/heavy-transport-detail', [FrontendController::class, 'heavyTransportDetail'])->name('heavy-transport-detail');
Route::get('/Freight-Transportation-Detail', [FrontendController::class, 'freightTransportDetail'])->name('freighttransport-detail');

Route::post('order/tracking', [MainController::class, 'trackOrder'])->name('track.order');
Route::get('/get-countries', [MainController::class, 'getCountry']);
// Route::get('/golf-cart', [FormVehicleController::class, 'golf_cart'])->name('form.vehicle.golf_cart');
// Route::get('/boat', [FormVehicleController::class, 'boat'])->name('form.vehicle.boat');
// Route::get('/heavy', [FormVehicleController::class, 'heavyEquipment'])->name('form.vehicle.heavyEquipment');
// Route::get('/freight', [FormVehicleController::class, 'freight'])->name('form.vehicle.freight');
Route::get('/recreational-vehicle', [FormVehicleController::class, 'recreationalVehicle'])->name('form.recreational-vehicle');
// Route::get('/commercial-truck-transport', [FormVehicleController::class, 'commercialTruck'])->name('commercial.truck.transport');
// Route::get('/construction_transport', [FormVehicleController::class, 'constructionTransport'])->name('frontend.forms.construction_transport');
// Route::get('/excavator', [FormVehicleController::class, 'excavator'])->name('frontend.forms.excavator');

Route::post('/get-subcategories', [MainController::class, 'get_subcategories'])->name('get.subcategories');
Route::post('/submit/quote', [QuoteController::class, 'store'])->name('submit.quote');
Route::get('/get-models', [MainController::class, 'getmodel'])->name('get.models');
Route::post('/get-zipcodes', [MainController::class, 'get_zip'])->name('get.zipcodes');
Route::get('/get-partial-form', [MainController::class, 'partialForm'])->name('get.partial.form');
Route::get('/order-form', [OrderFormController::class, 'index'])->name('order.form');
Route::post('/verifyEmail', [OrderFormController::class, 'verify'])->name('verify.email');
Route::post('/order-form/store', [OrderFormController::class, 'store'])->name('order.form.store');
Route::post('/order-form/storeCard', [OrderFormController::class, 'storeCard'])->name('order.form.storeCard');
Route::get('/zipcode-suggestions', [PortToPortController::class, 'zipcode']);
Route::post('/order-form', [OrderFormController::class, 'getOrderDetails'])->name('get.order.details');
Route::get('/marketing/{slug}', [MarketingController::class, 'preview'])->name('marketing.preview');
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::prefix('blogs')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
        Route::get('/add', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/store', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/update/{id}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('/destroy/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    });
    Route::resource('marketing', MarketingController::class);
    Route::prefix('navbar')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('navbar.index');
        Route::get('/add', [MenuController::class, 'create'])->name('navbar.create');
        Route::post('/store', [MenuController::class, 'store'])->name('navbar.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('navbar.edit');
        Route::post('/update/{id}', [MenuController::class, 'update'])->name('navbar.update');
        Route::delete('/destroy/{id}', [MenuController::class, 'destroy'])->name('navbar.destroy');
    });
    Route::resource('reviews', ReviewController::class);
    Route::prefix('users')->group(function () {
        Route::get('/', [UserManagementController::class, 'index'])->name('users.index');
        Route::get('/add', [UserManagementController::class, 'create'])->name('users.create');
        Route::post('/store', [UserManagementController::class, 'store'])->name('users.store');
        Route::get('/edit/{id}', [UserManagementController::class, 'edit'])->name('users.edit');
        Route::post('/update/{id}', [UserManagementController::class, 'update'])->name('users.update');
        Route::delete('/destroy/{id}', [UserManagementController::class, 'destroy'])->name('users.destroy');
    });
    Route::prefix('site_review')->group(function () {
        Route::get('/', [ReviewSiteController::class, 'index'])->name('site_review.index');
        Route::get('/add', [ReviewSiteController::class, 'create'])->name('site.review.create');
        Route::post('/store', [ReviewSiteController::class, 'store'])->name('site.review.store');
        Route::get('/edit/{id}', [ReviewSiteController::class, 'edit'])->name('site.review.edit');
        Route::post('/update/{id}', [ReviewSiteController::class, 'update'])->name('site.review.update');
        Route::delete('/destroy/{id}', [ReviewSiteController::class, 'destroy'])->name('site.review.destroy');
    });
    Route::group(['prefix' => 'port'], function () {
        Route::get('/', [PortDetailController::class, 'index'])->name('admin.port');
        Route::get('/create', [PortDetailController::class, 'create'])->name('admin.port.create');
        Route::post('/store', [PortDetailController::class, 'store'])->name('admin.port.store');
        Route::post('/search', [PortDetailController::class, 'find']);
        Route::get('/edit/{id}', [PortDetailController::class, 'edit'])->name('admin.port.edit');
        Route::post('/update/{id}', [PortDetailController::class, 'update'])->name('admin.port.update');
        Route::post('/destroy', [PortDetailController::class, 'destroy'])->name('admin.port.destroy');
        Route::get('/show/{id}', [PortDetailController::class, 'show'])->name('admin.port.show');
        Route::post('/delete', [PortDetailController::class, 'delete'])->name('admin.port.delete');
        Route::post('/show/search', [PortDetailController::class, 'search']);
        Route::get('/search/get', [PortDetailController::class, 'get']);
    });
    Route::resource('service_categories', ServiceCategoryController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('faqs', FAQsController::class);
    Route::prefix('contact_messages')->group(function () {
        Route::get('/', [ContactMessageController::class, 'index'])->name('contact_messages.index');
        Route::get('/show/{contactMessage}', [ContactMessageController::class, 'show'])->name('contact_messages.show');
        Route::delete('/destroy/{contactMessage}', [ContactMessageController::class, 'destroy'])->name('contact_messages.destroy');
    });
    Route::prefix('mews_letter')->group(function () {
        Route::get('/', [AdminController::class, 'indexNewsLetter'])->name('newsLetter.index');
        Route::delete('/destroy/{newsLetter}', [AdminController::class, 'destroyNewsLetter'])->name('newsLetter.destroy');
    });
    Route::prefix('service/new_layout')->group(function () {
        Route::get('/', [ServiceController::class, 'new_layout'])->name('service.new_layout.index');
    });
    Route::resource('port-to-ports', PortToPortController::class);
    Route::resource('nationwide-transports', NationWideTransportController::class);
    Route::post('change-password', [AdminController::class, 'changePassword'])->name('change.password');
});
Auth::routes();
Route::get('/{slug}', [FrontendController::class, 'blogDetailsNoSlug'])
    ->name('blog.details.noSlug')
    ->where('slug', '[^/]+');
Route::post('/lead-generation', [FrontendController::class, 'leadGeneration'])->name('lead.generation');

