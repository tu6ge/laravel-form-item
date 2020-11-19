<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$files = scandir(__DIR__.'/resources/views');

foreach ($files as $file) {
    if ($file == '.' || $file == '..') {
        continue;
    }
    $file = pathinfo($file, PATHINFO_FILENAME);
    $file = str_replace('.blade', '', $file);
    Route::view(str_replace('-', '_', $file), $file);
}

Route::post('form_action', function (Request $request) {
    return $request->all();
})->name('form_action');
