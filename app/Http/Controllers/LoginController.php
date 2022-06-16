<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Auth;
use Session;

class LoginController extends Controller
{
    // login
    public function login()
    {
        return view('login');
    }

    public function loginApi(Request $request)
    {

        $request->validate([
            'numberPhone' =>'required|numberPhone',
            'password' =>'required|min:8',
        ]);

        try{

        $http = new \GuzzleHttp\Client;
        $numberPhone    = $request->numberPhone;
        $password = $request->password;

        $response = $http->post('http://localhost/laravel_api_basic/public/api/login?',[
            'headers'=>[
                'Authorization'=>'Bearer'.session()->get('token.access_token')
            ],
            'query'=>[
                'numberPhone'=>$numberPhone,
                'password'=>$password
            ]
        ]);

        $result = json_decode((string)$response->getBody(),true);
        return redirect()->route('home');

        }catch(\Exception $e){
            return redirect()->back()->with('error','Login fail, Please try again.');
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}
