<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestCollection;

class ExampleController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(['message' => 'Hello world!']);
    }

    public function index_db(Request $request)
    {
        //code
        $data = TestCollection::query()->where('name', 'John Doe')->first();
        dd($data);
    }
}
