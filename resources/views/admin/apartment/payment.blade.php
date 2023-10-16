@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row mt-5">
        <div class="col-4 mt-5">
            <form id="payment-form" action="{{ route('admin.payment', ['apartment' => $apartment->id]) }}" method="post">
                @csrf
                @foreach ($sponsorships as $singleSponsor)
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="sponsor" value="{{ $singleSponsor->id }}" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            PREZZO:{{ $singleSponsor->price }} DURATA:{{ $singleSponsor->time }} 
                        </label>
                    </div>
                 @endforeach
                <div id="dropin-container"></div>
                <input type="submit" id="submit-button" class="button button--small button--green">
                <input type="hidden" id="nonce" name="payment_method_nonce" />
            </form>
        </div>
    </div>

    <script src="https://js.braintreegateway.com/web/dropin/1.40.2/js/dropin.js"></script>
    <script>
        const form = document.getElementById('payment-form');

        braintree.dropin.create({
        authorization: '{{ $client }}',
        container: '#dropin-container'
        }, (error, dropinInstance) => {
        if (error) console.error(error);  

        

        form.addEventListener('submit', function (event) {
        event.preventDefault();

        dropinInstance.requestPaymentMethod(function (requestPaymentMethodErr, payload) {
            if (requestPaymentMethodErr) {
                console.error(requestPaymentMethodErr);
            return;
        }

       
        document.getElementById('nonce').value = payload.nonce;


        form.submit();
    });
    });

});
    </script>
@endsection
