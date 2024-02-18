<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemcontroller;

Route::post('/item/create', [itemcontroller::class, 'createItem']);