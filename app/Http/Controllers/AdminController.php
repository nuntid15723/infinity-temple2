<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin.home');
    }
    function form(){
        return view('admin.form');
    }
    function profile(){
        return view('admin.profile');
    }
    function employee(){
        $name = " dijvgoir";
        return view('admin.employee',['name'=>$name]);
    }
    function edit(){
        return view('admin.edit');
    }
    function approve(){
        return view('admin.approve');
    }
    function disapproved(){
        return view('admin.disapproved');
    }
    function summaryle(){
        return view('admin.summaryle');
    }
    function PendingApproval(){
        return view('admin.pending-approval');
    }


}
