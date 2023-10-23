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

    $unsponsoredApartments = Apartment::with('services','image', 'sponsorships')
                ->where('visible', 1);


    $sponsoredApartments = Apartment::with('services', 'image', 'sponsorships')
                ->where('visible', 1)
                ->whereHas('sponsorships', function ($query) {
                    $query->whereDate('end_date', '>=', now()->setTimezone('Europe/Rome'));
                });

                
    $apartments = $sponsoredApartments->union($unsponsoredApartments)->paginate(6);
    
    
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

        $filterApt = Apartment::where('address', 'LIKE', '%' . $data['data'] . '%')
                                ->where('visible', 1)   
                                ->with('services','image')
                                ->paginate(3);

        return response()->json([
                'success'=>true,
                'message'=> $data,
                'results' =>  $filterApt
            ],200);
    
    }

    public function singleApt(string $id){
       
        $apartment = Apartment::where('id', $id)
                                ->where('visible', 1)
                                ->with('services','image','user')
                                ->first();

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

    public function filterApt(Request $request) {
        $data = $request->validate([
            'numberOfBeds' => 'nullable|numeric',
            'numberOfRooms' => 'nullable|numeric',
            'price' => 'nullable|numeric',
            'selectedServices' => 'nullable|array'
        ]);

        if (!array_key_exists('numberOfBeds', $data) || $data['numberOfBeds'] == '') {
            $data['numberOfBeds'] = 0;
        }
        if (!array_key_exists('numberOfRooms', $data) || $data['numberOfRooms'] == '') {
            $data['numberOfRooms'] = 0;
        }
        if (!array_key_exists('price', $data)  || $data['price'] == '') {
            $data['price'] = 0;
        }

        if(count($data) == 0) {
            $result = Apartment::with('services','image')->where('visible', 1)->paginate(3);
        }
        elseif(isset($data['selectedServices'])) {
            $result = Apartment::with('services', 'image')
                                ->where('visible', 1)
                                ->where('bed', '>=' , $data['numberOfBeds'])
                                ->where('room', '>=' , $data['numberOfRooms'])
                                ->where('price', '>=' , $data['price'])
                                ->whereHas('services', function ($query) use ($data) {
                                    $query->whereIn('service_id', $data['selectedServices']);
                                }, '=', count($data['selectedServices']))
                                ->get();
        }
        else{
            $result = Apartment::with('services', 'image')
                                ->where('visible', 1)
                                ->where('bed', '>=' , $data['numberOfBeds'])
                                ->where('room', '>=' , $data['numberOfRooms'])
                                ->where('price', '>=' , $data['price'])
                                ->get();
        }
    
        return response()->json([
            'success'=>true,
            'response'=> $data,
            'results' => $result
            
        ],200);
    }
}
