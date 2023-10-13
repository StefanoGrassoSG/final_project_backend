@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        @if(count($apartment->sponsorships) > 0)
            @if($apartment->sponsorships[count($apartment->sponsorships) - 1]->pivot->end_date >= $todayDate) 
            <h1>
                YOU HAVE A SPONSOR
            </h1>
            @endif
        @endif
        <div class="col">
            <div class="title-create d-flex align-items-center">
                <h1>
                  Il tuo bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
                </h1>
                <img src="{{ Vite::asset('resources/img/logo_app_plus.png') }}" alt="" class="logo-add-app">
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