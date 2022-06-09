<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // product index
    public function index()
    {
        return view('form.product');
    }
}
