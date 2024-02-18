<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\VendorController;

Route::get('/', function () {
    return view('item.index');
});
Route::post('/item/create', [ItemController::class, 'createItem'])->name('item.create');
Route::get('/vendor/allVendors', [VendorController::class, 'getVendor'])->name('vendor.allVendors');