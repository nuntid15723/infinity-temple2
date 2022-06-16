<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Typeofleave;
use Illuminate\Http\Request;

class AddcustomerController extends Controller
{
    //
    function index()
    {
        return view('admin.employee');
    }
    function addCustomer(Request $request)
    {

        // dd($request->all());

        try {

            $student = new User;
            $student->name =  $request->name;
            $student->lastName = $request->lastName;
            $student->email = $request->email;
            $student->numberPhone =  $request->numberPhone;
            $student->PersoncardID =  $request->PersoncardID;
            $student->password = $request->password;
            $student->Banknumber = $request->Banknumber;
            $student->ImgBank =  $request->ImgBank;
            $student->Salary = $request->Salary;
            $student->Department = $request->Department;
            $student->Sex = $request->Sex;
            $student->startwork = $request->startwork;
            $student->save();
            return redirect()->back()->with('status', 'Student Added Successfully');
            // DB::commit();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
