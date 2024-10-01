<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::get('/', function () {
    return view('welcome');
});

// お問い合わせフォームの送信ルート
Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');

// 成功ページのルート
Route::get('/success', function () {
    return view('success'); // success.blade.phpにリダイレクト
})->name('success');
