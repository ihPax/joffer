<?php

use App\Http\Controllers\OffertaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/list", [OffertaController::class, "list"]);
Route::post("/AddOfferta",[OffertaController::class, 'AddOfferta']);
Route::get("/view/{id}", [OffertaController::class, "view"]);
