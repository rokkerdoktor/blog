<?php

namespace App\Http\Controllers;
use App\Termek;
use App\Kosar;
use Illuminate\Http\Request;

class index extends Controller
{


    public function index()
    {
    $jsonString = file_get_contents(base_path('kosar.json'));
    $data = json_decode($jsonString, true);


    
        return view('index', ['termek' => Termek::all(),'kosar' => $data]);
    }

}
