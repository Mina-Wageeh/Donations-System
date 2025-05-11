<?php

use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\InstitutionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ItemDistributionController;
use App\Http\Controllers\Admin\ItemDonationController;
use App\Http\Controllers\Admin\GiverController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\MoneyDistributionController;
use App\Http\Controllers\Admin\MoneyDonationController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware'=>'auth'] , function()
{

    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::group(['prefix'=>'institutions'] , function()
    {
        Route::get('/', [InstitutionController::class, 'index'])->name('institution.index');
        Route::get('/create', [InstitutionController::class, 'create'])->name('institution.create');
        Route::post('/store', [InstitutionController::class, 'store'])->name('institution.store');
        Route::get('/edit/{id}', [InstitutionController::class, 'edit'])->name('institution.edit');
        Route::post('/update/{id}', [InstitutionController::class, 'update'])->name('institution.update');
        Route::post('/delete', [InstitutionController::class, 'delete'])->name('institution.delete');
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

    Route::group(['prefix'=>'items'] , function()
    {
        Route::get('/', [ItemController::class, 'index'])->name('item.index');
        Route::get('create', [ItemController::class, 'create'])->name('item.create');
        Route::post('store', [ItemController::class, 'store'])->name('item.store');
    });

    Route::group(['prefix'=>'money-donations'] , function()
    {
        Route::get('/', [MoneyDonationController::class, 'index'])->name('donation.money.index');
        Route::get('create', [MoneyDonationController::class, 'create'])->name('donation.money.create');
        Route::post('store', [MoneyDonationController::class, 'store'])->name('donation.money.store');
    });

    Route::group(['prefix'=>'item-donations'] , function()
    {
        Route::get('/', [ItemDonationController::class, 'index'])->name('donation.item.index');
        Route::get('create', [ItemDonationController::class, 'create'])->name('donation.item.create');
        Route::post('store', [ItemDonationController::class, 'store'])->name('donation.item.store');
    });



//////////////////////////////////////////////////////////////////////////////////////////////////

    Route::group(['prefix'=>'money-distributions'] , function()
    {
        Route::get('/', [MoneyDistributionController::class, 'index'])->name('money.distribution.index');
        Route::get('create', [MoneyDistributionController::class, 'create'])->name('money.distribution.create');
        Route::post('store', [MoneyDistributionController::class, 'store'])->name('money.distribution.store');

    });

    Route::group(['prefix'=>'item-distributions'] , function()
    {
        Route::get('/', [ItemDistributionController::class, 'index'])->name('item.distribution.index');
        Route::get('create', [ItemDistributionController::class, 'create'])->name('item.distribution.create');
        Route::post('store', [ItemDistributionController::class, 'store'])->name('item.distribution.store');
    });

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

});

Route::redirect('register' , 'login');


