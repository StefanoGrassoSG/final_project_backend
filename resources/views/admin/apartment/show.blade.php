@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row my-row ">
        @if(count($apartment->sponsorships) > 0)
           @php $lastSponsor = $apartment->sponsorships[count($apartment->sponsorships) - 1]->pivot->end_date;
                $startSponsor = $apartment->sponsorships[count($apartment->sponsorships) - 1]->pivot->start_date;
                dd($apartment->sponsorships[count($apartment->sponsorships) - 1])
           @endphp
           @if($lastSponsor >= $todayDate)
                la tua sponsor finisce {{ $lastSponsor }}
           @endif
        @endif
        <div class="col">
            <div class="title-create d-flex align-items-center">
                <h1>
                  Il tuo bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
                </h1>
                <img src="{{ Vite::asset('resources/img/logo_app_plus.png') }}" alt="" class="logo-add-index d-none d-sm-block">
            </div>
            <div class="card">
                {{ $apartment->name }}
            </div>
            <div class="img-fluid">
                @if(str_starts_with($apartment->cover_img,'uploads'))
                    <img src="/storage/{{ $apartment->cover_img }}" alt="{{ $apartment->name }}">
                @else 
                    <img src="{{ $apartment->cover_img }}" alt="{{ $apartment->name }}">
                @endif
            </div>
        </div>
    </div>
@endsection