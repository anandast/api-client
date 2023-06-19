<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PartyController extends Controller
{
    public function index()
    {
        $response = Http::get('http://rest-api.test/api/v1/ministers/party');
        //dd($response->json());
        $responseData = $response->json();
        $data = $responseData['data'];
        //dd($data);
        return view('party.index', ['data' => $data]);
    }

    public function add(Request $request)
    {
        $response = Http::post('http://rest-api.test/api/v1/minister/party/create', [
            'name' => $request->name
        ]);
        return redirect('dashboard/party');
    }

    public function edit()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $response = Http::patch('http://rest-api.test/api/v1/minister/party/update/' . $id, [
            'name' => $name
        ]);
        return redirect('dashboard/party');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $response = Http::delete('http://rest-api.test/api/v1/minister/party/' . $id);
        return redirect('dashboard/party');
    }
}
