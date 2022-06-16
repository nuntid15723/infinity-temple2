<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // register
    public function register()
    {
        return view('auth.register');
    }

    // post register
    public function registerApi(Request $request)
    {
          dd($request->all());
        $request->validate([
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'numberPhone' => 'required',
            'PersoncardID' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'Banknumber' => 'required',
            'Imgbank' => 'required',
            'Salary' => 'required',
        ]);

        try {

            $http = new \GuzzleHttp\Client;

            $name       = $request->name;
            $lastName       = $request->lastName;
            $email      = $request->email;
            $numberPhone      = $request->numberPhone;
            $PersoncardID      = $request->PersoncardID;
            $password   = $request->password;
            $c_password = $request->c_password;
            $Banknumber     = $request->numberBank;
            $PersoncardID     = $request->PersoncardID;
            $Imgbank     = $request->Imgbank;
            $Salary     = $request->Salary;


            $response = $http->post('http://localhost/laravel_api_basic/public/api/register', [
                'headers' => [
                    'Authorization' => 'Bearer' . session()->get('token.access_token')
                ],
                'query' => [
                    'name'      => $name,
                    'lastName'      => $lastName,
                    'numberPhone'     => $numberPhone,
                    'email'      => $email,
                    'PersoncardID' =>$PersoncardID,
                    'password'  => $password,
                    'c_password' => $c_password,
                    'Banknumber' => $Banknumber,
                    'Imgbank' => $Imgbank,
                    'Salary' => $Salary,
                ]
            ]);

            $result = json_decode((string)$response->getBody(), true);
            return redirect()->route('login');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Register fail, Please try again.');
        }
    }
}
