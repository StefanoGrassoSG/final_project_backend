@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row mt-5">
        <div class="col-4 mt-5">
            <form id="payment-form" action="{{ route('admin.payment', ['apartment' => $apartment->id]) }}" method="post" class="p-4 mt-5 border border-rounded-4 form-sponsor">
                @csrf
                <div class="row my-row">
                    <div class="col">
                        <div class="title-main d-flex align-items-center justify-content-center justify-content-sm-start">
                            <h1>
                              Sponsorizza il tuo bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
                            </h1>
                            <img src="{{ Vite::asset('resources/img/logo_app_plus.png') }}" alt="" class="logo-add-index d-none d-sm-block">
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                      
                        <h3 class="title-form-sponsor">
                            Scegli il tuo piano:
                        </h3>
                        @foreach ($sponsorships as $singleSponsor)
                            <div class="form-check mb-4">
                                <input class="form-check-input checkbox-sponsor" type="radio" name="sponsor" value="{{ $singleSponsor->id }}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <span class="span-info-sponsor">Prezzo: </span>{{ $singleSponsor->price }}&euro;
                                    <br>
                                    <span class="span-info-sponsor">Durata: </span>{{ $singleSponsor->time }} ore
                                </label>
                            </div>
                        @endforeach
                        <button type="submit" class="btn-sponsor btn-create-form d-block">Sponsorizza</button>
                      
                    </div>
                </div>
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
