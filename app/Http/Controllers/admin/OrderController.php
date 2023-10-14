<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Requests\orders\OrderRequest;
use App\Models\Sponsorship;

class OrderController extends Controller
{
    public function generate(Request $request, Gateway $gateway) {
        $client = $gateway->clientToken()->generate();
      

      return view('admin.apartment.payment', compact('client'));
    }

    public function makePayment(Request $request, Gateway $gateway) {

        $sponsor = Sponsorship::find(2);
        
        $result = $gateway->transaction()->sale([
            'amount' => $sponsor->price,
            'paymentMethodNonce' => 'fake-valid-nonce',
            'options' => [
                'submitForSettlement' => true
            ]
        ]);
        

        if($result->success){
            $data = [
                'success' => true,
                'message' => 'transazione eseguita con successo'
            ];    
            return response()->json($data,200);
        }
        else {
            $data = [
                'success' => false,
                'message' => 'transazione fallita'
            ];    
            return response()->json($data,401);
        }
    }
    
}
