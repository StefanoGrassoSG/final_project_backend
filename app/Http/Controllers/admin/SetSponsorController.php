<?php

namespace App\Http\Controllers\admin;

use App\Models\Sponsorship;
use App\Http\Requests\StoreSponsorshipRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSponsorshipRequest;
use App\Models\Apartment;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class SetSponsorController extends Controller
{
    public function test(Request $request, string $id)
    {   
        $formdata = $request->validate([
            'sponsor' => 'required'
        ]);

        $key = base64_encode(env('BRAINTREE_PUBLIC_KEY').env('BRAINTREE_PRIVATE_KEY'));
        $response = Http::withoutVerifying()->withHeaders([
            'Authorization' => 'Basic '.$key,
            'Authorization' => 'Bearer '. env('TOKENIZATION_KEY'),
            'Braintree-Version' => 2023-10-13,
            'Content-Type: application/json'
        ])->post('https://payments.sandbox.braintree-api.com/graphql');

        dd($response->json());

    



        $sponsor = Sponsorship::where('id', $formdata['sponsor'])->first();
        $apartment = Apartment::where('id', $id)->first();
        
        if(count($apartment->sponsorships) > 0){
            $lastSponsor = $apartment->sponsorships[count($apartment->sponsorships) - 1]->pivot->end_date;

            $startDate = now();

            if($lastSponsor >= $startDate) {
                $endDate = date('Y-m-d H:i',strtotime('+'. $sponsor->time .'hours',strtotime($lastSponsor)));
                dd($sponsor->time);
            }
            else {
                $endDate = now()->addHours($sponsor->time);
            }

            $apartment->sponsorships()->attach($sponsor->id, ['start_date' => $lastSponsor, 'end_date' => $endDate]);
        }
        else {
            $startDate = now()->setTimezone('Europe/Rome');
            $endDate = now()->setTimezone('Europe/Rome')->addHours($sponsor->time);

            $apartment->sponsorships()->attach($sponsor->id, ['start_date' => $startDate, 'end_date' => $endDate]);

            
        }
      
       
      

        return redirect()->route('admin.apartment.show', compact('apartment'));
    }

}
