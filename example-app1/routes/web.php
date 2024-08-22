<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\WomenShopController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/payment', [AppController::class, 'paymen'])->name('app.paymen');

Route::get('/about', [AppController::class, 'aboutus'])->name('app.aboutus');
Route::get('/blog', [AppController::class, 'blogitem'])->name('app.blog');

Route::get('/contacta', [AppController::class, 'form'])->name('app.form');

Route::get('/wshop', [WomenShopController::class, 'index'])->name('shop.index');
Route::get ('/wproduct/{slug}',[WomenShopController::class, 'wproductDetails'])->name('shop.wproduct.details');



Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get ('/product/{slug}',[ShopController::class, 'productDetails'])->name('shop.product.details');

Route::get('/cart',[CartController::class, 'index'])->name('cart.index');

Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');

Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');

Route::delete('/cart/remove',[CartController::class, 'removeItem'])->name('cart.remove');

Route::delete('/cart/clear',[CartController::class, 'clearCart'])->name('cart.clear');

Route::post('/wishlist/add', [WishlistController::class, 'addProductToWishlist'])->name('wishlist.store');
Route::get('/wishlist',[WishlistController::class,'getWishlistedProducts'])->name('wishlist.list');

Route::delete('/wishlist/remove',[WishlistController::class, 'removeProductFromWishlist'])->name('wishlist.remove');
Route::delete('/wishlist/clear',[WishlistController::class, 'clearWishlist'])->name('wishlist.clear');


Route::post('/wishlist/move-to-cart',[WishlistController::class, 'moveToCart'])->name('wishlist.move.to.cart');
// for user
Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class, 'index'])->name('user.index');
});

//for admin

Route::middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});




// routes for blogs
// Route::prefix('blog')->group(function () {
//     Route::get('/', [BlogPostController::class, 'index'])->name('blog.index');
//     Route::get('/{slug}', [BlogPostController::class, 'show'])->name('blog.show');
//     Route::middleware('auth')->group(function () {
//         Route::get('/create', [BlogPostController::class, 'create'])->name('blog.create');
//         Route::post('/', [BlogPostController::class, 'store'])->name('blog.store');
//         Route::get('/{slug}/edit', [BlogPostController::class, 'edit'])->name('blog.edit');
//         Route::put('/{slug}', [BlogPostController::class, 'update'])->name('blog.update');
//         Route::delete('/{slug}', [BlogPostController::class, 'destroy'])->name('blog.destroy');
//     });
// });
















// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
