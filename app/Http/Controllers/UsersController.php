<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function index(){
        return view('user.homeuser');
    }
    function formuser(){
        return view('user.formuser');
    }
    function profileuser(){
        return view('user.profileuser');
    }
    function history(){
        return view('user.history');
    }
    // function edit(){
    //     return view('user.edit');
    // }
    // function summaryle(){
    //     return view('user.summaryle');
    // }

}
