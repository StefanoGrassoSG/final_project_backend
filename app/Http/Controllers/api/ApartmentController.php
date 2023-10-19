<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\User;
use App\Models\Service;
use App\Models\Image;
use App\Models\Message;
use App\Http\Requests\StoreApartmentRequest;
use App\Http\Requests\UpdateApartmentRequest;
use Illuminate\Support\Facades\Http;


//HELPERS
use Illuminate\Support\Facades\Auth;
// facades
use Illuminate\Support\Facades\Storage;


class ApartmentController extends Controller
{
    public function index() {

    $apartments = Apartment::paginate(3);
    
    if($apartments) {

        return response()->json([
            'code' => 200,
            'success' => true,
            'results' => $apartments
        ]);
    }
    else {

        return response()->json([
            'code' => 404,
            'success' => false,
            'message' => 'not found'
        ]);
    }

    }

    public function show() {

    }

    public function searchApartment(Request $request) {

        $data = $request->validate([
            'data' => 'required'
        ]);

        $filterApt = Apartment::where('address', 'LIKE', '%' . $data['data'] . '%')->paginate(3);

        return response()->json([
                'success'=>true,
                'message'=> $data,
                'results' =>  $filterApt
            ],200);
    
    }

    public function singleApt(string $id){
       
        $apartment = Apartment::findOrFail($id);
        if($apartment){
            return response()->json([
                'code' => 200,
                'success' => true,
                'results' => $apartment
            ]); 
        }
        else{
            return response()->json([
                'success'=>false,
                'message'=>'failed to find apartment'
            ],404);
        }
        
    }
}
