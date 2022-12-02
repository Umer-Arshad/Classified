<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdmin\UserManagementController;
use App\Http\Controllers\SuperAdmin\CouponCodeController;
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


//Route::get('/index', [PermissionRoleController::class, 'index_role'])->name('index');
Route::get('/user_index', [UserController::class, 'user_index'])->name('user_index');
Route::get('/forget_password', [UserController::class, 'forget_password'])->name('forget_password');
Route::get('/product_category', [UserController::class, 'product_category'])->name('product_category');
Route::get('/attribute_product', [UserController::class, 'attribute_product'])->name('attribute_product');
Route::get('/ad', [UserController::class, 'ad'])->name('ad');
Route::get('/ad_review', [UserController::class, 'ad_review'])->name('ad_review');
Route::get('/discount', [UserController::class, 'discount'])->name('discount');
Route::get('/product_review', [UserController::class, 'product_review'])->name('product_review');
Route::get('/order', [UserController::class, 'order'])->name('order');
Route::get('/category', [UserController::class, 'category'])->name('category');
Route::get('/product', [UserController::class, 'product'])->name('product');
Route::get('/attribute', [UserController::class, 'attribute'])->name('attribute');
Route::get('/productattribute', [UserController::class, 'productattribute'])->name('productattribute');
Route::get('/addata', [UserController::class, 'addata'])->name('addata');
Route::get('/adreviews', [UserController::class, 'adreviews'])->name('adreviews');
Route::get('/productreviews', [UserController::class, 'productreviews'])->name('productreviews');
Route::get('/discount_data', [UserController::class, 'discount_data'])->name('discount_data');
Route::get('/order_data', [UserController::class, 'order_data'])->name('order_data');
Route::get('/order_data', [UserController::class, 'order_data'])->name('order_data');
Route::get('/attribute_category', [UserController::class, 'attribute_category'])->name('attribute_category');
Route::get('/show-attribute/{product_id}', [UserController::class, 'show_attribute'])->name('show_attribute');
Route::get('/model', [UserController::class, 'model']);
Route::get('/dattable', [UserController::class, 'dattable']);












Route::get('/welcome', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;





//Super Admin Routes
Route::get('/login', [LoginController::class, 'show'])->middleware('adminLoginCheck')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('adminLoginCheck')->name('login.perform');

//Super Admin Profile Routes
Route::get('/edit_profile', [UserManagementController::class, 'edit_profile'])->middleware('adminLoginCheck')->name('edit_profile');
//Route::get('/update_profile', [UserManagementController::class, 'update_profile'])->middleware('adminLoginCheck')->name('update_profile');

Route::post('update-password/{id}', [UserManagementController::class, 'update_profile'])->middleware('adminLoginCheck')->name('update-password');


//User Management
Route::get('/user_record', [UserManagementController::class, 'user_record'])->middleware('adminLoginCheck')->name('user_record');
Route::get('/update_user_status', [UserManagementController::class, 'update_user_status'])->middleware('adminLoginCheck')->name('update_user_status');
Route::get('/view_user/{id}', [UserManagementController::class, 'view_user'])->middleware('adminLoginCheck')->name('view_user');
Route::get('/edit_user/{id}', [UserManagementController::class, 'edit_user'])->middleware('adminLoginCheck')->name('edit_user');
Route::post('/update_user/{id}', [UserManagementController::class, 'update_user'])->middleware('adminLoginCheck')->name('update_user');
Route::get('/delete_user/{id}', [UserManagementController::class, 'delete_user'])->middleware('adminLoginCheck')->name('delete_user');
Route::get('users/{id}', [UserManagementController::class, 'show'])->middleware('adminLoginCheck')->name('users.show');
Route::get('/advertiser', [UserManagementController::class, 'advertiser'])->middleware('adminLoginCheck')->name('advertiser');
Route::get('/customer', [UserManagementController::class, 'customer'])->middleware('adminLoginCheck')->name('customer');

//Coupon Codes
Route::get('/view_coupon_code', [CouponCodeController::class, 'view_coupon_code'])->middleware('adminLoginCheck')->name('view_coupon_code');
Route::get('/add_coupon_code', [CouponCodeController::class, 'add_coupon_code'])->middleware('adminLoginCheck')->name('add_coupon_code');
Route::post('/store_coupon_code', [CouponCodeController::class, 'store_coupon_code'])->middleware('adminLoginCheck')->name('store_coupon_code');
Route::get('/edit_coupon_code/{id}', [CouponCodeController::class, 'edit_coupon_code'])->middleware('adminLoginCheck')->name('edit_coupon_code');
Route::post('/update_coupon_code/{id}', [CouponCodeController::class, 'update_coupon_code'])->middleware('adminLoginCheck')->name('update_coupon_code');
Route::get('/delete_coupon_code/{id}', [CouponCodeController::class, 'delete_coupon_code'])->middleware('adminLoginCheck')->name('delete_coupon_code');
Route::get('/update_coupon_code_status', [CouponCodeController::class, 'update_coupon_code_status'])->middleware('adminLoginCheck')->name('update_coupon_code_status');


//Advertiser Routes

//Advertiser Dashboard
Route::get('/advertiser_dashboard',[HomeController::class,'advertiser'])->middleware('advertiserLogin')->name('advertiser_dashboard');

//Customer Routes

//Customer Dashboard
Route::get('/customer_dashboard',[HomeController::class,'customer'])->middleware('customerLogin')->name('customer_dashboard');


//Visitor Routes
//Visitor Dashboard
Route::get('/visitor_dashboard',[HomeController::class,'visitor'])->middleware('visitorLogin')->name('visitor_dashboard');















Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');

	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
