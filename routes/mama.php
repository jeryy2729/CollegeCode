<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoCtrl;
use App\Http\Controllers\formCtrl;

Route::get('/imgs', function () {
    return view('img');
});
