@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row row-index">
        <div class="col">
            <div class="title-create d-flex align-items-center justify-content-center justify-content-sm-start">
                <h1>
                  I tuoi bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
                </h1>
                <img src="{{ Vite::asset('resources/img/logo_app_plus.png') }}" alt="" class="logo-add-index d-none d-sm-block">
            </div>
            <div class="col-12 mb-4">
                <a href="{{ route('admin.apartment.create') }}" class="btn btn-create-form w-100">
                    + Aggiungi
                </a>
            </div>
            @foreach ($apartments as $singleApt)
            <div class="card-apartment d-block my-3 border rounded-4 d-sm-flex ">
                <div class="col-12 col-md-3 d-block d-sm-none d-md-block">
                @if(str_starts_with($singleApt->cover_img,'uploads'))
                <div class="img-div rounded-sm-top-4">
                    <img src="/storage/{{ $singleApt->cover_img }}" alt="{{ $singleApt->name }}">
                </div>                    
                @else
                <div class="img-div">
                    <img class="" src="{{ $singleApt->cover_img }}" alt="{{ $singleApt->name }}">
                </div>
                @endif
                </div>
                <div class="col-12 col-sm-6 pt-3 px-3 px-md-5 infos-apt">
                    <h3 class="d-none d-sm-block">
                        Info
                    </h3>
                    <ul>
                        <li>
                            <span class="span-info-apt d-block d-sm-inline" id="span-name-apt">Nome: </span>{{ $singleApt->name }}
                        </li>
                        <li class="d-none d-sm-block">
                            <span class="span-info-apt">Indirizzo: </span>{{ $singleApt->address }}
                        </li>
                        <li class="d-none d-sm-block">
                            <span class="span-info-apt">Metratura: </span>{{ $singleApt->square_meter }} mq
                        </li>
                        <li class="d-none d-sm-block">
                            <span class="span-info-apt">Prezzo: </span>{{ $singleApt->price }} &euro;
                        </li>
                    </ul>
                    
                </div>
                <div class="col-12 col-sm-6 pt-3 px-3 px-md-5 action-apt d-flex flex-column align-items-center d-sm-block">
                    <h3>
                        Azioni
                    </h3>
                    <div class="my-2">
                        <a href="{{ route('admin.apartment.edit', ['apartment' => $singleApt->id]) }}" class="btn btn-create-card">Modifica</a>
                    </div>
                    <div class="my-2">
                        <a href="{{ route('admin.apartment.show', ['apartment' => $singleApt->id]) }}" class="btn btn-create-card">Visualizza</a>
                    </div>
                    <div class="my-2">
                        <a href="{{ route('admin.sponsorship.show', ['sponsorship' => $singleApt->id]) }}" class="btn btn-create-card">sponsorizza</a>
                    </div>
                        
                    <form action="{{route('admin.apartment.destroy',['apartment'=>$singleApt->id])}}" method="POST" class="my-1 d-block pb-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn d-block btn-create-card btn-create-card-out">
                                Elimina
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection