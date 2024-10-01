<?php

// app/Http/Controllers/InquiryController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Inquiry::create($validatedData);

        return redirect()->route('success'); // 成功時に成功画面にリダイレクト
    }
}
