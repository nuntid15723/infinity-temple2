<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typeofleave;

class TypeofleaveController extends Controller
{

    function index()
    {
        return view('admin.form');
    }
    function insertform(Request $request)
    {

        //  dd($request->all());

        try {

            $Type = new Typeofleave;
            $Type->Fullname =  $request->Fullname;
            $Type->email = $request->email;
            $Type->Typeofleave =  $request->Typeofleave;
            $Type->lafile =  $request->lafile;
            $Type->startla = $request->startla;
            $Type->endla = $request->endla;
            $Type->hour =  $request->hour;
            $Type->reasonla = $request->reasonla;
            $Type->save();
            return redirect()->back()->with('status', 'Student Added Successfully');
            // DB::commit();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
