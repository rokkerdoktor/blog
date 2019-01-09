<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Termek;
class Work extends Controller
{
    public function add(Request $request,$id)
    {
        $termek=Termek::find($id);
        $termek->qty=$request->cucc;
        return $termek->toJson();
    }
    public function remove($id)
    {
        $termek=Termek::find($id);
        return $termek->toJson();
    }
}
