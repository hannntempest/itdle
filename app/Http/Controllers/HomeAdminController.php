<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Word;

class HomeAdminController extends Controller
{

    public function index()
    {
        $randomWord = Word::inRandomOrder()->first();

        return view('admin_page', ['randomWord' => $randomWord]);
    }
}
