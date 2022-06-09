<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    // call api user
    public function index(Request $request)
    {
        return view('home');
    }

}
