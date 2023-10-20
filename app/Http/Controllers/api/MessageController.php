<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function getMessage(Request $request){
        $data= $request->validate([
            'name'=> 'required',
            'object'=>'nullable',
            'email'=>'required',
            'content'=>'required',
            'apartmentId'=>'required',
            'date'=>'nullable'
        ]);
        $date = now()->setTimezone('Europe/Rome');
        $mess = Message::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'object'=> $data['object'],
            'date'=> $date,
            'content'=> $data['content'],
            'apartment_id'=> $data['apartmentId'],
        ]);

        if($mess){
           return response()->json([
            'result'=>'true',
            'message'=> 'message was sent successfully'
        ],200); 
        }
        else{
            return response()->json([
                'result'=> 'false',
                'message'=>'failed to send message'
            ],402);
        }
        
    }
}
