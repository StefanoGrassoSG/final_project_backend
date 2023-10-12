<?php

namespace App\Http\Controllers\admin;

use App\Models\Apartment;
use App\Models\User;
use App\Models\Service;
use App\Http\Requests\StoreApartmentRequest;
use App\Http\Requests\UpdateApartmentRequest;
use App\Http\Controllers\Controller;

//HELPERS
use Illuminate\Support\Facades\Auth;
// facades
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        //$apartments = Apartment::all();
        $user = Auth::user();
        $userId = Auth::id();
        $apartments = Apartment::where('user_id', $user['id'])->get();
       

        return view('admin.apartment.index', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {     $service = Service::all();
        
        return view('admin.apartment.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApartmentRequest $request)
    {   
        $user = Auth::user();
        $userId = Auth::id();
        $formData = $request->validated();
        if(isset($formData['img_path'])){
            $img_path = Storage::put('cover_img',$formData['cover_img']);
        }
        else {
            $img_path = null;
        }
        if($formData['visible']) {
            $formData['visible'] = false;
        }

        $apartment = Apartment::create([
            'room' => $formData['room'],
           'bathroom' => $formData['bathroom'],
           'bed' => $formData['bed'],
           'shared_bathroom' => $formData['shared_bathroom'],
           'address' => $formData['address']. ', ' . $formData['city'],
           'visible' => $formData['visible'],
           'name' => $formData['name'],
           'price' => $formData['price'],
           'square_meter' => $formData['square_meter'],
           'description' => $formData['description'],
           'cover_img' => $img_path,
           'user_id' => $userId
        ]);

        if(isset($formData['service'])){
            foreach($formData['service'] as $serviceId){
                $apartment->services()->attach($serviceId);
            }
        }

        return redirect()->route('admin.apartment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Apartment $apartment)
    {
        return view('admin.apartment.show', compact('apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apartment $apartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApartmentRequest $request, Apartment $apartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apartment $apartment)
    {
        //
    }
}
