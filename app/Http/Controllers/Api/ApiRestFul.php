<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Psr7\Response;

class ApiRestFul extends Controller
{
    
    public function index()
    {
        $user= User::all();
        return response()->json($user);
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
