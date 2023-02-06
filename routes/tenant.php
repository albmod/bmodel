<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\Customer\CustomerAuthController;
use App\Http\Controllers\Dashboard\Seller\PanelController;
use App\Http\Controllers\Shop\ShopsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Middleware\CheckTenantUserMiddleware;
/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect']
], function () {



Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
    //CheckTenantUserMiddleware::class,
     ])->group(function () {

        Route::get('/', [ShopsController::class, 'index'])->name('site');

         Route::get('/test',function(){
  //return DOMAIN_NAME;
       return 'test inside subdomain';
        });


//    Auth::routes();
//    Route::get('dashboard', [CustomerAuthController::class, 'dashboard']);
//
//    Route::get('registration', [CustomerAuthController::class, 'registration'])->name('register-user');
//    Route::post('custom-registration', [CustomerAuthController::class, 'customRegistration'])->name('register.custom');
//    Route::get('signout', [CustomerAuthController::class, 'signOut'])->name('signout');

    Route::middleware(['auth:customer'])->group(function () {
        //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('home', [CustomerAuthController::class, 'dashboard'])->name('home');
        Route::get('dashboard', [CustomerAuthController::class, 'dashboard'])->name('dashboard-customer');;
        Route::get('logout', [CustomerAuthController::class, 'logout'])->name('logout-customer');
    });


    Route::group([ 'middleware' => 'guest:customer'], function () {

        Route::get('login', [CustomerAuthController::class, 'index'])->name('login-customer');
        Route::post('custom-login', [CustomerAuthController::class, 'customLogin'])->name('login.custom');
        Route::get('registration', [CustomerAuthController::class, 'registration'])->name('register-customer');
        Route::post('custom-registration', [CustomerAuthController::class, 'customRegistration'])->name('register.custom');

    });




});

});
