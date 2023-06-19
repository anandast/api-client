<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index()
    {
        $response = Http::get('http://rest-api.test/api/v1/ministers/category');
        //dd($response->json());
        $responseData = $response->json();
        $data = $responseData['data'];
        //dd($data);
        return view('categories.index', ['data' => $data]);
    }

    public function add(Request $request)
    {
        $response = Http::post('http://rest-api.test/api/v1/minister/category/create', [
            'name' => $request->name
        ]);
        return redirect('dashboard/categories');
    }

    public function edit()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $response = Http::patch('http://rest-api.test/api/v1/minister/category/update/' . $id, [
            'name' => $name
        ]);
        return redirect('dashboard/categories');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $response = Http::delete('http://rest-api.test/api/v1/minister/category/' . $id);
        return redirect('dashboard/categories');
    }
}
