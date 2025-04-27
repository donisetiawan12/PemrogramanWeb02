<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nama = "Doni Setiawan";
    $nim = "0110224010";

    return view('welcome', compact('nama', 'nim'));
});
