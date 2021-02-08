<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::redirect('/', '/index')->name('home');

Route::get('/', function () {
    return view('home.index');
});
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/vehicles', [HomeController::class, 'vehicles'])->name('vehicles');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/myaccount', [HomeController::class, 'myaccount'])->name('myaccount');
Route::get('/login/join', [HomeController::class, 'login/join'])->name('login/join');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/transfer/{id}/{slug}', [HomeController::class, 'transfer'])->name('transfer');

Route::get('/transfer_detail/{id}/{slug}', [HomeController::class, 'detay'])->name('transfer_detail');
Route::get('/categorytransfers/{id}/{slug}', [HomeController::class, 'categorytransfers'])->name('categorytransfers');
Route::post('/gettransfer', [HomeController::class, 'gettransfer'])->name('gettransfer');
Route::get('/transferlist/{search}', [HomeController::class, 'transferlist'])->name('transferlist');
Route::post('/sendreview/{id}/{slug}', [HomeController::class, 'sendreview'])->name('sendreview');


Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile',[UserController::class,'index'])->name('profile');
//review
    Route::prefix('review')->group(function (){

        Route::get('/',[\App\Http\Controllers\ReviewController::class,'index'])->name('user_review');
        Route::post('update/{id}',[\App\Http\Controllers\ReviewController::class,'update'])->name('user_review_update');
        Route::get('delete/{id}',[\App\Http\Controllers\ReviewController::class,'destroy'])->name('user_review_delete');
        Route::get('show/{id}',[\App\Http\Controllers\ReviewController::class,'show'])->name('user_review_show');

    });


});









//Admin
Route::middleware('auth')->prefix('admin')->group(function() {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    //Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
    #Transport

    Route::get('transport', [\App\Http\Controllers\Admin\TransportController::class, 'index'])->name('admin_transport');
    Route::get('transport/add', [\App\Http\Controllers\Admin\TransportController::class, 'add'])->name('admin_transport_add');
    Route::post('transport/create', [\App\Http\Controllers\Admin\TransportController::class, 'create'])->name('admin_transport_create');
    Route::get('transport/edit/{id}', [\App\Http\Controllers\Admin\TransportController::class, 'edit'])->name('admin_transport_edit');
    Route::post('transport/update/{id}', [\App\Http\Controllers\Admin\TransportController::class, 'update'])->name('admin_transport_update');
    Route::get('transport/delete/{id}', [\App\Http\Controllers\Admin\TransportController::class, 'destroy'])->name('admin_transport_delete');
    Route::get('transport/show', [\App\Http\Controllers\Admin\TransportController::class, 'show'])->name('admin_transport_show');


    //Transfer
    Route::prefix('transfer')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\TransferController::class, 'index'])->name('admin_transfers');
        Route::get('create', [\App\Http\Controllers\Admin\TransferController::class, 'create'])->name('admin_transfer_add');
        Route::post('store', [\App\Http\Controllers\Admin\TransferController::class, 'store'])->name('admin_transfer_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\TransferController::class, 'edit'])->name('admin_transfer_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\TransferController::class, 'update'])->name('admin_transfer_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\TransferController::class, 'destroy'])->name('admin_transfer_delete');
        Route::get('show', [\App\Http\Controllers\Admin\TransferController::class, 'show'])->name('admin_transfer_show');

    });
    //Location

    Route::prefix('location')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\LocationController::class, 'index'])->name('admin_location');
        Route::get('create', [\App\Http\Controllers\Admin\LocationController::class, 'create'])->name('admin_location_add');
        Route::post('store', [\App\Http\Controllers\Admin\LocationController::class, 'store'])->name('admin_location_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\LocationController::class, 'edit'])->name('admin_location_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\LocationController::class, 'update'])->name('admin_location_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\LocationController::class, 'destroy'])->name('admin_location_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\LocationController::class, 'show'])->name('admin_location_show');
    });
    //Message
    Route::prefix('message')->group(function () {

        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');

    });
    //review
    Route::prefix('reviews')->group(function (){

        Route::get('/',[ReviewController::class,'index'])->name('admin_review');
        Route::get('edit/{id}',[ReviewController::class,'edit'])->name('admin_review_edit');
        Route::post('update/{id}',[ReviewController::class,'update'])->name('admin_review_update');
        Route::get('delete/{id}',[ReviewController::class,'destroy'])->name('admin_review_delete');
        Route::post('show',[ReviewController::class,'show'])->name('admin_review_show');
    });
    //Transfer Image Galery
    Route::prefix('image')->group(function () {

        Route::get('create/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{transfer_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });
    //Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
});

   Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function() {

       Route::get('/',[UserController::class, 'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function() {

    Route::get('/profile',[UserController::class, 'index'])->name('profile');

});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
