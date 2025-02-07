<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;


Route::get('/generate-pdf', [InvoiceController::class, 'generatePDF']);

Route::get('/', function () {
    return view('welcome');
});
