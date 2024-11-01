<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
// controller route
//create controller er ekta method jeta post contioller er modde takhbe
Route::get('/create', [PostController::class, 'create']);