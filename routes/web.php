<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Pesan;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('index');
});
Route::get('/index', [App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::get('/product-user', [App\Http\Controllers\UserController::class, 'produk'])->name('produk');
Route::get('/product/{product:slug}', [App\Http\Controllers\UserController::class, 'produk_detail']);
Route::get('/about_us', [App\Http\Controllers\UserController::class, 'tentangkami'])->name('tentangkami');
Route::get('/contact_us', [PesanController::class, 'index'])->name('kontakkami');
Route::get('/buy/{product:slug}', [UserController::class, 'pemesanan']);
Route::post('/pesan', [PesanController::class, 'store']);
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/landingpage', [LandingPage::class, 'index'])->name('landingpage');
    Route::post('/landingpage-update', [LandingPage::class, 'store']);
    Route::get('/team', [TeamController::class, 'index'])->name('team');
    Route::get('/team-create', [TeamController::class, 'create']);
    Route::post('/team-store', [TeamController::class, 'store']);
    Route::get('/team-edit/{team:slug}', [TeamController::class, 'edit']);
    Route::post('/team-update/{team:id}', [TeamController::class, 'update']);
    Route::get('/team/delete/{team:slug}', [TeamController::class, 'destroy']);
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product-create', [ProductController::class, 'create']);
    Route::post('/product-store', [ProductController::class, 'store']);
    Route::get('/product/delete/{product:id}', [ProductController::class, 'destroy']);
    Route::get('/product-detail/{slug}', [DetailProductController::class, 'index']);
    Route::get('/product-detail/delete/{detail__product:id}', [DetailProductController::class, 'destroy']);
    Route::post('upload-multiple-image-ajax', [DetailProductController::class, 'saveUpload']);
    Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');
    Route::get('/contact-detail/{contact:id}', [ContactUsController::class, 'update'])->name('contact-detail');
    Route::get('/contact/delete/{contact:id}', [ContactUsController::class, 'destroy']);
});
