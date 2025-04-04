<?php

use App\Http\Controllers\PromotionController;
use App\Models\Promotion;
use Illuminate\Support\Facades\Route;

Route::get('woi', function () {
    return view('test');
});

Route::get('/', function () {
    $promotions= Promotion::all();
    return view('promotions.index', compact('promotions'));
});

Route::resource('promotions', PromotionController::class);

