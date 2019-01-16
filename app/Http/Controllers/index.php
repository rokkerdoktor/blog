<?php

namespace App\Http\Controllers;
use App\Termek;
use App\Kosar;
use Illuminate\Http\Request;
use Cookie;

class index extends Controller
{


    public function index(Request $request)
    {
        $kosar = file_get_contents("http://localhost/blog/api/list");   
        $json = json_decode($kosar, true);
        return view('index', ['termek' => Termek::all(),'kosar' => $json]);
    }

}
