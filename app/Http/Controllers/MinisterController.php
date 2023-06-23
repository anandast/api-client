<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class MinisterController extends Controller
{
    public function index()
    {

        $response = Http::withToken(Session::get('token'))->get('http://rest-api.test/api/v1/ministers');
        $responseData = $response->json();
        //dd($responseData);
        $data = $responseData['data'];

        return view('dashboard.index', ['data' => $data]);
    }

    public function me()
    {
        $response = Http::withToken(Session::get('token'))->get('http://rest-api.test/api/user');
        dd($response->json());
        $detail = $response[''];
        return view('dashboard.index', ['detail' => $detail]);
    }

    public function allData()
    {
        $response = Http::withToken(Session::get('token'))->get('http://rest-api.test/api/v1/ministers/all');
        //dd($response->json());
        $responseData = $response->json();
        $data = $responseData['data'];

        return view('minister.index', ['data' => $data]);
    }

    public function add()
    {
    }

    public function edit()
    {
    }

    public function delete()
    {
        $id = $_POST['id'];
        $response = Http::withToken(Session::get('token'))->delete('http://rest-api.test/api/v1/minister/' . $id);
        return redirect('dashboard/minister');
    }
}
