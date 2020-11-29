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

Route::get('foo_api/{id?}', function ($id) {
    switch ($id) {
        case 1:
            return [
                [
                    'value' => 11,
                    'text'  => '苹果',
                    'leaf'  => true,
                ],
                [
                    'value' => 12,
                    'text'  => '香蕉',
                    'leaf'  => true,
                ],
            ];
        case 2:
            return [
                [
                    'value' => 21,
                    'text'  => '白菜',
                    'leaf'  => true,
                ],
                [
                    'value' => 22,
                    'text'  => '芹菜',
                    'leaf'  => true,
                ],
            ];
        case 0:
        default:
            return [
                [
                    'value' => 1,
                    'text'  => '水果',
                    'leaf'  => false,
                ],
                [
                    'value' => 2,
                    'text'  => '蔬菜',
                    'leaf'  => false,
                ],
            ];
    }
})->where('id', '[0-9]+');
