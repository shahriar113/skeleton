<?php

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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'PagesController@index')->name('dashboard');
Route::get('/logout', 'Auth\LoginController@logout');


// Demo routes
// Route::get('/datatables', 'PagesController@datatables');
// Route::get('/ktdatatables', 'PagesController@ktDatatables');
// Route::get('/select2', 'PagesController@select2');
// Route::get('/icons/custom-icons', 'PagesController@customIcons');
// Route::get('/icons/flaticon', 'PagesController@flaticon');
// Route::get('/icons/fontawesome', 'PagesController@fontawesome');
// Route::get('/icons/lineawesome', 'PagesController@lineawesome');
// Route::get('/icons/socicons', 'PagesController@socicons');
// Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


// ---------------setup---------------

// Setup -----------------------------


Route::get('/setup/bank', 'SetupController@bank');
Route::post('/setup/post_bank', 'SetupController@post_bank');

// Route::get('/setup/location', 'SetupController@location')->name('add-location');
// Route::post('/setup/add_location', 'SetupController@add_location');

// Route::get('/setup/category', 'SetupController@category')->name('category');
// Route::post('/setup/add_category', 'SetupController@add_category');
// Route::post('/setup/check_category_code', 'SetupController@check_category_code');

// Route::get('/setup/brand', 'SetupController@brand')->name('add-brand');
// Route::post('/setup/add_brand', 'SetupController@add_brand');
// Route::post('/setup/check_brand_code', 'SetupController@check_brand_code');

// Route::get('/setup/card', 'SetupController@card')->name('add-card');
// Route::post('/setup/add_card', 'SetupController@add_card');


// Route::get('/setup/asset', 'SetupController@asset')->name('add-asset');
// Route::post('/setup/asset_type', 'SetupController@asset_type');
// Route::post('/setup/asset_head', 'SetupController@asset_head');

// Route::get('/setup/warranty', 'SetupController@warranty')->name('add-warranty');
// Route::post('/setup/add_warranty', 'SetupController@add_warranty');


// Route::get('/setup/parts_accessories', 'SetupController@parts_accessories')->name('add-parts-accessories');
// Route::post('/setup/add_parts_accessoris', 'SetupController@add_parts_accessoris');

// Route::get('/setup/employee_role', 'SetupController@employee_role')->name('add-employee-role');
// Route::post('/setup/add_role', 'SetupController@add_role');
// Route::post('/setup/edit_role', 'SetupController@edit_role');

// Route::get('/setup/supplier', 'SetupController@supplier')->name('add-supplier');
// Route::post('/setup/add_supplier', 'SetupController@add_supplier');

// Route::get('/setup/permission', 'SetupController@permission')->name('add-permission');

// Route::get('/setup/bank_account', 'SetupController@bank_account')->name('add-bank-account');
// Route::post('/setup/add_bank_account', 'SetupController@add_bank_account');

// Route::get('/setup/service', 'SetupController@service')->name('add-service');
// Route::post('/setup/add_service', 'SetupController@add_service');

// Route::get('/setup/user', 'SetupController@user')->name('add-user');
// Route::post('/setup/add_user', 'SetupController@add_user');
