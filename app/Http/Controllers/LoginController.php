<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $response = Http::post('http://rest-api.test/api/login', [
            'username' => $request->username,
            'password' => $request->password
        ]);
        $responseData = $response->json();

        $data = $responseData['data'];
        dd($data);
        foreach ($data as $item) {
            # code...
            $token = $item['token'];
        };


        return redirect('/dashboard')->with(['token' => $token]);
    }
}
