<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Termek;
use App\Kosar;
use Response;
use Cookie;
use Validator;

class Work extends Controller
{


public function list(Request $request){
    $myip = request()->ip();
    $kosar=Kosar::select('id','amount')->where("ip",$myip)->get();
    return Response::json(['items' => $kosar],200);
}

    public function add(Request $request)
    {   
    
        $validator=Validator::make($request->all(),
        [
            'id' => 'required',
            'cucc' => 'required',
            'ip' => 'required'
        ]);

        if($validator->fails())
        {
            return Response::json(['errors' => $validator->errors()],400);
        }

        $clientIP = request()->ip();
        $kosar=new Kosar;
        $kosar->id=$request->id;
        $kosar->amount=$request->cucc;
        $kosar->ip=$clientIP;
        $kosar->save();
        return Response::json(['data' => 'success'],200);

    }
    
    public function remove($id)
    {
        $delete = Kosar::find($id);
        $delete->delete();
        return Response::json(['data' => 'success'],200);
    }
    
}
