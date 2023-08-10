<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class QuoteController extends Controller
{
    #[NoReturn] public function store(Request $request)
    {
//        $rules = '^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$]';
        $request->validate([
            'first-name' => ['required', 'min:2', 'max:22'],
            'last-name' => ['required', 'min:2', 'max:30'],
            'email' => ['required', 'email', 'max:55'],
            // check if phone is formatted as valid USA number
            'phone' => ['required'],
            'message' => ['required', 'max:255']
        ]);

        return redirect()->with('success', "Thanks, we\'ll get in touch!");


    }
}
