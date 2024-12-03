<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreManager;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\Admin\AjaxController;

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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('stores/{id}',[StoreManager::class,'stores']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// product extra routes
Route::get('find_cat/{item_id}',[AjaxController::class,'find_cat']);
Route::get('getProductVariation/{type}',[AjaxController::class,'getProductVariation']);
Route::post('filterProduct',[AjaxController::class,'filterProduct']);
Route::post('TrashedfilterProduct',[AjaxController::class,'TrashedfilterProduct']);
Route::post('findArea',[AjaxController::class,'findArea']);
Route::get('getAreaName/{id}',[AjaxController::class,'getAreaName']);
Route::post('filterSupplier',[AjaxController::class,'filterSupplier']);

Route::get('/paypal_pay',[PaypalController::class,'paypal_pay']);
Route::post('pay_with_paypal',[PaypalController::class,'pay_with_paypal'])->name('pay_with_paypal');
Route::get('success',[PaypalController::class,'success'])->name('success');
Route::get('cancel',[PaypalController::class,'cancel'])->name('cancel');

require __DIR__.'/auth.php';
