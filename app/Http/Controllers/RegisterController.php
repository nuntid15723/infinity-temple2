<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // register
    public function register()
    {
        return view('register');
    }

    // post register
    public function registerApi(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        
        try{

        $http = new \GuzzleHttp\Client;

        $name       = $request->name;
        $email      = $request->email;
        $password   = $request->password;
        $c_password = $request->c_password;

        $response = $http->post('http://localhost/laravel_api_basic/public/api/register',[
            'headers'=>[
                'Authorization'=>'Bearer'.session()->get('token.access_token')
            ],
            'query'=>[
                'name'      => $name,
                'email'     => $email,
                'password'  => $password,
                'c_password'=> $c_password,
            ]
        ]);
        
        $result = json_decode((string)$response->getBody(),true);
        return redirect()->route('login');

        }catch(\Exception $e){
            return redirect()->back()->with('error','Register fail, Please try again.');
        }
    }    
}
