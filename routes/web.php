<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Layout;

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
// Frontend
Route::get('/', [Layout\HomeController::class,'index']);
Route::get('/products', [Layout\ProductController::class,'index']);
Route::get('/single-product/{id}', [Layout\ProductController::class,'show']);
Route::get('/posts', [Layout\PostsController::class,'index']);
Route::get('/posts-detail/{id}', [Layout\PostsController::class, 'show']);

Route::get('/about-us', function () {
    return view('frontend.about-us.about-us');
});
Route::get('/contact-us', function () {
    return view('frontend.contact-us.contact-us');
});
Route::post('contact-us/store', [Layout\ContactController::class,'store']);
Route::get('contact-us/completed', [Layout\ContactController::class,'index']);
Route::get('/posts_detail', function () {
    return view('frontend.posts_detail.posts_detail');
});
Route::get('/wishlist', function () {
    return view('frontend.wishlist.wishlist');
});
Route::get('/checkout', function () {
    return view('frontend.checkout.checkout');
});

Route::get('/Add-Cart/{id}', [Layout\CartController::class, 'AddCart']);
Route::get('/Delete-Item-Cart/{id}', [Layout\CartController::class, 'DeleteItemCart']);

Route::get('/List-Carts', [Layout\CartController::class, 'ViewListCart']);

Route::get('/Delete-Item-List-Cart/{id}', [Layout\CartController::class, 'DeleteListItemCart']);

Route::get('/Save-Item-List-Cart/{id}/{quanty}', [Layout\CartController::class, 'SaveListItemCart']);



// Backend

Auth::routes();

Route::group(['prefix'=>'/admin'], function (){
    Route::get('/index', [Admin\DashboardController::class,'index'])->middleware('auth');

});
Route::group(['prefix'=>'/admin/news'], function (){
    Route::get('/create', [Admin\NewsController::class,'create']);
    Route::post('/store', [Admin\NewsController::class,'store']);
    Route::get('/', [Admin\NewsController::class,'index']);
    Route::get('/{id}', [Admin\NewsController::class, 'show']);
    Route::get('/edit/{id}', [Admin\NewsController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\NewsController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\NewsController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/posts'], function (){
    Route::get('/create', [Admin\PostsController::class,'create']);
    Route::post('/store', [Admin\PostsController::class,'store']);
    Route::get('/', [Admin\PostsController::class,'index']);
    Route::get('/{id}', [Admin\PostsController::class, 'show']);
    Route::get('/edit/{id}', [Admin\PostsController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\PostsController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\PostsController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/posts-category'], function (){
    Route::get('/create', [Admin\PostsCategoryController::class,'create']);
    Route::post('/store', [Admin\PostsCategoryController::class,'store']);
    Route::get('/', [Admin\PostsCategoryController::class,'index']);
    Route::get('/edit/{id}', [Admin\PostsCategoryController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\PostsCategoryController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\PostsCategoryController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/product-category'], function (){
    Route::get('/create', [Admin\ProductCategoryController::class,'create']);
    Route::post('/store', [Admin\ProductCategoryController::class,'store']);
    Route::get('/', [Admin\ProductCategoryController::class,'index']);
    Route::get('/edit/{id}', [Admin\ProductCategoryController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\ProductCategoryController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\ProductCategoryController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/products'], function (){
    Route::get('/create', [Admin\ProductController::class,'create']);
    Route::post('/store', [Admin\ProductController::class,'store']);
    Route::get('/', [Admin\ProductController::class,'index']);
    Route::get('/edit/{id}', [Admin\ProductController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\ProductController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\ProductController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/banners'], function (){
    Route::get('/create', [Admin\BannerController::class,'create']);
    Route::post('/store', [Admin\BannerController::class,'store']);
    Route::get('/', [Admin\BannerController::class,'index']);
    Route::get('/edit/{id}', [Admin\BannerController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\BannerController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\BannerController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/bills'], function (){
    Route::get('/create', [Admin\BillController::class,'create']);
    Route::post('/store', [Admin\BillController::class,'store']);
    Route::get('/', [Admin\BillController::class,'index']);
    Route::get('/edit/{id}', [Admin\BillController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\BillController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\BillController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/customers'], function (){
    Route::get('/create', [Admin\CustomerController::class,'create']);
    Route::post('/store', [Admin\CustomerController::class,'store']);
    Route::get('/', [Admin\CustomerController::class,'index']);
    Route::get('/edit/{id}', [Admin\CustomerController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\CustomerController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\CustomerController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/users'], function (){
    Route::get('/create', [Admin\UserController::class,'create']);
    Route::post('/store', [Admin\UserController::class,'store']);
    Route::get('/', [Admin\UserController::class,'index']);
    Route::get('/edit/{id}', [Admin\UserController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\UserController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\UserController::class,'destroy']);
});
Route::group(['prefix'=>'/admin/contacts'], function (){
    Route::get('/create', [Admin\ContactController::class,'create']);
    Route::post('/store', [Admin\ContactController::class,'store']);
    Route::get('/', [Admin\ContactController::class,'index']);
    Route::get('/edit/{id}', [Admin\ContactController::class, 'edit']);
    Route::PATCH('/update/{id}', [Admin\ContactController::class,'update']);
    Route::PATCH('/delete/{id}', [Admin\ContactController::class,'destroy']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');
