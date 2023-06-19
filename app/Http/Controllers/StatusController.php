<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StatusController extends Controller
{
    public function index()
    {
        $response = Http::get('http://rest-api.test/api/v1/ministers/status');
        $responseData = $response->json();
        $data = $responseData['data'];
        return view('status.index', ['data' => $data]);
    }

    public function add(Request $request)
    {
        $response = Http::post('http://rest-api.test/api/v1/minister/status/create', [
            'code' => $request->code,
            'name' => $request->name
        ]);
        return redirect('dashboard/status');
    }

    public function edit()
    {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        $response = Http::patch('http://rest-api.test/api/v1/minister/status/update/' . $id, [
            'code' => $code,
            'name' => $name
        ]);
        return redirect('dashboard/status');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $response = Http::delete('http://rest-api.test/api/v1/minister/status/' . $id);
        return redirect('dashboard/status');
    }
}
