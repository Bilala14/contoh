<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // arahkan ke view index.blade.php
});

Route::post('/biodata', function (Request $request) {
    $pelayanan = $request->pelayanan;
    return view('biodata', compact('pelayanan'));
})->name('biodata');