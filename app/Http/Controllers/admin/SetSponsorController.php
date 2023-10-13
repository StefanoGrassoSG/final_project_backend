<?php

namespace App\Http\Controllers\admin;

use App\Models\Sponsorship;
use App\Http\Requests\StoreSponsorshipRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSponsorshipRequest;
use App\Models\Apartment;

use Illuminate\Http\Request;

class SetSponsorController extends Controller
{
    public function test(Request $request, string $id)
    {   
       
        $formdata = $request->validate([
            'sponsor' => 'required'
        ]);
        
        dd($id);
    }

}
