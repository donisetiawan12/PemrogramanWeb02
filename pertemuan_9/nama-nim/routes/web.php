<?php

use Illuminate\Support\Facades\Route;

Route::get('/biodata', function () {
    $nama = 'Doni Setiawan';
    $nim = '0110224010';
    return view('biodata', compact('nama', 'nim'));
});

