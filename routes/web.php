<?php

use App\Http\Controllers\Admin\InstitutionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemDonationController;
use App\Http\Controllers\Admin\GiverController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\MoneyDistributionController;
use App\Http\Controllers\Admin\MoneyDonationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::group(['prefix'=>'churches'] , function()
{
    Route::get('/', [InstitutionController::class, 'index'])->name('giver.index');
});

Route::group(['prefix'=>'money-donations'] , function()
{
    Route::get('/', [MoneyDonationController::class, 'index'])->name('donation.money.index');
    Route::get('create', [MoneyDonationController::class, 'create'])->name('donation.money.create');
    Route::post('store', [MoneyDonationController::class, 'store'])->name('donation.money.store');
});

Route::group(['prefix'=>'items'] , function()
{
    Route::get('/', [ItemController::class, 'index'])->name('item.index');
    Route::get('create', [ItemController::class, 'create'])->name('item.create');
    Route::post('store', [ItemController::class, 'store'])->name('item.store');
});

Route::group(['prefix'=>'items-donations'] , function()
{
    Route::get('/', [ItemDonationController::class, 'index'])->name('donation.item.index');
    Route::get('create', [ItemDonationController::class, 'create'])->name('donation.item.create');
    Route::post('store', [ItemDonationController::class, 'store'])->name('donation.item.store');
});


Route::group(['prefix'=>'givers'] , function()
{
    Route::get('/', [GiverController::class, 'index'])->name('giver.index');
    Route::get('create', [GiverController::class, 'create'])->name('giver.create');
    Route::post('store', [GiverController::class, 'store'])->name('giver.store');
    Route::get('edit/{id}', [GiverController::class, 'edit'])->name('giver.edit');
    Route::post('update/{id}', [GiverController::class, 'update'])->name('giver.update');
    Route::post('delete', [GiverController::class, 'delete'])->name('giver.delete');
});

//////////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['prefix'=>'money-distribution'] , function()
{
    Route::get('/', [MoneyDistributionController::class, 'index'])->name('money.distribution.index');
    Route::get('create', [MoneyDistributionController::class, 'create'])->name('money.distribution.create');
    Route::post('store', [MoneyDistributionController::class, 'store'])->name('money.distribution.store');

});




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
