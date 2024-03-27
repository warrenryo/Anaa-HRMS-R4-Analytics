<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormAnswer; // Import ng modelo para sa mga sagot sa form
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Kunin ang ID ng kasalukuyang naka-log in na user
        $userId = Auth::id();
    
        // Validasyon ng mga ipapasa mula sa form
        $validatedData = $request->validate([
            'answer_field' => 'required',
            // dagdagan mo ng mga iba pang field na gustong sagutan
        ]);
    
        // Isama ang user ID sa data na isinusumite sa sistema
        $validatedData['user_id'] = $userId;
    
        // I-save ang mga sagot sa database
        FormAnswer::create($validatedData);
    
        return redirect()->back()->with('success', 'Sagot ay nai-save na!');
    }
    public function showForm()
    {
        return view('form');
    }

}