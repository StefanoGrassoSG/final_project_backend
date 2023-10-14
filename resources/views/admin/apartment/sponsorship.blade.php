
@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row mt-5">
        <div class="col mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          <form action="{{ route('admin.test', ['test' => $apartment->id]) }}" method="POST" class="mt-5">
            @foreach ($sponsorships as $singleSponsor)
                @csrf
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="sponsor" value="{{ $singleSponsor->id }}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        PREZZO:{{ $singleSponsor->price }} DURATA:{{ $singleSponsor->time }} 
                    </label>
                </div>
            @endforeach
            <button type="submit">Sponsorizza</button>
          </form>
        </div>
    </div>

    <script>
        <script src="https://js.braintreegateway.com/web/dropin/1.30.1/js/dropin.min.js"></script>
        var button = document.querySelector('#submit-button');
        braintree.dropin.create({
            authorization: '{{ $client }}',
            container: '#dropin-container'
        }, function (createErr, instance) {
            button.addEventListener('click', function () {
                instance.requestPaymentMethod(function (err, payload) {
                    // Submit payload.nonce to your server
                });
            });
        });
    </script>
    

@endsection