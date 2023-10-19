<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\View;

class ViewController extends Controller
{
    public function getIp(Request $request){
        $ip = $request->validate([
            'ip'=>'required'
        ]);
        $date = date("Y-m-d");
        // $date2 = date('Y-M-D',$date)
        // $validateIp = View::where('ip',$ip)
        //                 ->where('date',$date)
        //                 ->first();
        return response()->json([
            'x'=>$date
        ]);
    }
}
