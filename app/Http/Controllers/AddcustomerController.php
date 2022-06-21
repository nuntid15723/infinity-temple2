<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Typeofleave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;

class AddcustomerController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'numberPhone' => ['required', 'string', 'numberPhone', 'max:25', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:25', 'unique:users'],
            'PersoncardID' => ['required', 'string', 'min:8', 'confirmed'],
            'Banknumber' => ['required', 'string', 'min:8', 'confirmed'],
            'ImgBank' => ['required', 'string', 'min:8', 'confirmed'],
            'Salary' => ['required', 'string', 'min:8', 'confirmed'],
            'Department' => ['required', 'string', 'min:8', 'confirmed'],
            'Sex' => ['required', 'string', 'min:8', 'confirmed'],
            'startwork' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    //
    function index()
    {
        $data = User::simplePaginate(10);
        // dd($data);
        return view('admin.employee', ['users' => $data]);
    }

    public function show($id)
    {
        $user = User::find($id);

        return response()->json($user);
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
            return redirect()->back()->with('status', 'Customer Added Successfully');
            // DB::commit();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    /**
     *@param int $id
     *@param \App\Model\Post $post
     *@return \Illuminate\Http\Response

     */
    function DeleteCustomer($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }


    function Edit(Request $req)
    {
        $data = User::find($req->id);
        $data->name =  $req->name;
        $data->lastName = $req->lastName;
        $data->email = $req->email;
        $data->numberPhone =  $req->numberPhone;
        $data->PersoncardID =  $req->PersoncardID;
        $data->password = $req->password;
        $data->Banknumber = $req->Banknumber;
        $data->ImgBank =  $req->ImgBank;
        $data->Salary = $req->Salary;
        $data->Department = $req->Department;
        $data->Sex = $req->Sex;
        $data->startwork = $req->startwork;
        $data->save();
        return redirect()->back()->with('status', 'Customer Update Successfully');
    }
}
