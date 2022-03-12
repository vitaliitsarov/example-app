<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResources([
    'products' => ProductController::class,
]);
