<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', ['responseData' => '']);
    }

    public function register(Request $request)
    {
        $username = $_POST['username'];
        $response = Http::post('http://rest-api.test/api/register', [
            'username' => $username,
            'name' => $request->name,
            'password' => $request->password,
            'confirm_password' => $request->confirm_password
        ]);

        $responseData = $response->json();
        //dd($responseData);
        return view('register.index', ['responseData' => $responseData]);
    }
}
