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


        foreach($json as $json2)
        {
            $count=0;
            foreach($json2 as $json4)
            {
                $object[$count] = Termek::find($json4["id"]);
                $object[$count]["qty"]=$json4["amount"];
                $count++;
            }
        }
        if(empty($object)){ 
           $object="Your cart is empty";
        }

        return view('index', ['termek' => Termek::all(),'kosar' => $object]);
    }

}
