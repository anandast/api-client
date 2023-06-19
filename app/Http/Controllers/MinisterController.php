<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MinisterController extends Controller
{
    public function index()
    {
        $response = Http::get('http://rest-api.test/api/v1/ministers');
        //dd($response->json());
        $responseData = $response->json();
        $data = $responseData['data'];

        return view('dashboard.index', ['data' => $data]);
    }

    public function allData()
    {
        $response = Http::get('http://rest-api.test/api/v1/ministers/all');
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
        $response = Http::delete('http://rest-api.test/api/v1/minister/' . $id);
        return redirect('dashboard/minister');
    }
}
