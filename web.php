<?php
use App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\ContactusController;
use App\Http\Controllers\site\CartController;
use App\Http\Controllers\Site\sitendexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    Route::get('/', [sitendexController::class, 'index'])->name('sitehome.index');
    Route::post('post', [sitendexController::class, 'store'])->name('contuctus.store');
    Route::get('Products', [sitendexController::class, 'showproducts'])->name('siteProducts.index');

    Route::get('ContactUs', [sitendexController::class, 'showcontactUs'])->name('ContactUssite.index');
    Route::get('/cart', [sitendexController::class, 'cartshow'])->name('cartshow.index');

    Route::get('aboutUs', [sitendexController::class, 'showaboutUs'])->name('aboutUsssite.index');
    Route::get('Faq', [sitendexController::class, 'showFaq'])->name('showFaqsite.index');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');

Route::get('cart/details/{id}', [CartController::class, 'detailsshowcart'])->name('detailsshowcart.index');

Route::get('/about-me', [sitendexController::class, 'showaboutme'])->name('aboutmessite.index');


Route::get('eveningdresses1', [sitendexController::class, 'showeveningdresses1'])->name('eveningdresses1.index');

Route::get('eveningdresses2', [sitendexController::class, 'showeveningdresses2'])->name('eveningdresses2.index');


Route::get('flowerbouquets', [sitendexController::class, 'flowerbouquets'])->name('flowerbouquets.index');

Route::get('crown', [sitendexController::class, 'crown'])->name('crown.index');

Route::get('cap', [sitendexController::class, 'cap'])->name('cap.index');
Route::get('highheel', [sitendexController::class, 'highheel'])->name('highheel.index');


});




Route::get('/header', [sitendexController::class, 'headershow'])->name('headers.index');

Route::get('/header', [sitendexController::class, 'headershow'])->name('headers.index');

Route::get('/header', [sitendexController::class, 'headershow'])->name('headers.index');

Route::get('/header', [sitendexController::class, 'headershow'])->name('headers.index');

Route::get('/header', [sitendexController::class, 'headershow'])->name('headers.index');

Route::get('/header', [sitendexController::class, 'headershow'])->name('headers.index');
