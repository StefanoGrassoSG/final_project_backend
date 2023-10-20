<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function getMessage(Request $request){
        $data= $request->validate([
            'name'=> 'required',
            'object'=>'nullable',
            'email'=>'required',
            'content'=>'required',
            'apartmentId'=>'required',
            'date'=>'required'
        ]);
        
        return response()->json([
            'message'=>'ok',
            'data'=>$data
        ],200);
    }
}
