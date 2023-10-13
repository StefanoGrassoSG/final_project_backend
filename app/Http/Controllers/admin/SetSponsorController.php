<?php

namespace App\Http\Controllers\admin;

use App\Models\Sponsorship;
use App\Http\Requests\StoreSponsorshipRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSponsorshipRequest;
use App\Models\Apartment;
use Illuminate\Support\Facades\Date;

use Illuminate\Http\Request;

class SetSponsorController extends Controller
{
    public function test(Request $request, string $id)
    {   
      
        $formdata = $request->validate([
            'sponsor' => 'required'
        ]);

        $sponsor = Sponsorship::where('id', $formdata['sponsor'])->first();
        $apartment = Apartment::where('id', $id)->first();
        
        $startDate = now()->setTimezone('Europe/Rome');
        $endDate = now()->addHours($sponsor->time);

        $apartment->sponsorships()->attach($sponsor->id, ['start_date' => $startDate, 'end_date' => $endDate]);

        return redirect()->route('admin.apartment.show', compact('apartment'));
    }

}
