<?php

use App\Http\Controllers\Dashboard\Seller\MainCategoriesController;
use App\Http\Controllers\Dashboard\Seller\PanelController;
use App\Http\Controllers\Dashboard\Seller\ProfileController;
use App\Http\Controllers\Dashboard\Seller\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test',function(){
  //return DOMAIN_NAME;
    return Request::root();
});

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', ]
], function () {

    Route::get('/', [\App\Http\Controllers\Site\WebController::class, 'index'])->name('site');

//Route::get('/', function () {
//    return view('site.index');
//});

Auth::routes();
    Route::get('/home', [PanelController::class, 'index'])->name('home');

    ################################## Settings routes ######################################
    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', [SettingsController::class, 'index'])->name('settings.index');
        Route::get('/shipping/{type}', [SettingsController::class, 'editShippingMethods'])->name('settings.shipping');
        Route::put('/shipping/{id}', [SettingsController::class, 'updateShippingMethods'])->name('update.shipping.methods');


    });
    ################################## Seller Profile routes ######################################
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/edit', [ProfileController::class, 'editProfile'])->name('edit.profile');
        Route::put('/update', [ProfileController::class, 'updateProfile'])->name('update.profile');


    });




    ################################## Main categories routes ######################################
    Route::group(['prefix' => 'main_categories'], function () {
        Route::get('/', [MainCategoriesController::class, 'index'])->name('maincategories');
        Route::get('create', [MainCategoriesController::class,'create'])->name('maincategories.create');
        Route::post('store', [MainCategoriesController::class,'store'])->name('maincategories.store');
        Route::get('edit/{id}', [MainCategoriesController::class,'edit'])->name('maincategories.edit');
        Route::post('update/{id}', [MainCategoriesController::class,'update'])->name('maincategories.update');
        Route::get('delete/{id}', [MainCategoriesController::class,'destroy'])->name('maincategories.delete');
    });


    Route::get('away', [\App\Http\Controllers\TenantController::class, 'changeTenant'])
    ->name('tenants.change');


});
