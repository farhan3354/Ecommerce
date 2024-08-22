<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/ 
//remove /home from 2 files from auth folder confirm file and routeservice provider

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
