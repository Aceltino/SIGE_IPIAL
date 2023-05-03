<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function index(){
        $user= User::all();
        return view('pagina-inicial',);
    }

}
