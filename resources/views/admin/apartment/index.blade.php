@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row row-index">
        <div class="col">
            <div class="title-create d-flex align-items-center">
                <h1>
                  I tuoi bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
                </h1>
                <img src="{{ Vite::asset('resources/img/logo_app_plus.png') }}" alt="" class="logo-add-index">
            </div>
            <div class="col-12 mb-4">
                <a href="{{ route('admin.apartment.create') }}" class="btn btn-create-form w-100">
                    + Aggiungi
                </a>
            </div>
            @foreach ($apartments as $singleApt)
            <div class="card-apartment d-flex my-3 border rounded-4">
                <div class="col-3 d-none d-md-block">
                @if(str_starts_with($singleApt->cover_img,'uploads'))
                <div class="img-div">
                    <img src="/storage/{{ $singleApt->cover_img }}" alt="{{ $singleApt->name }}">
                </div>                    
                @else
                <div class="img-div ">
                    <img class="rounded-start-4 " src="{{ $singleApt->cover_img }}" alt="{{ $singleApt->name }}">
                </div>
                @endif
                </div>
                <div class="col-9 col-md-7 pt-3 ps-3 infos-apt">
                    <h3>
                        Info
                    </h3>
                    <ul>
                        <li>
                            <span class="span-info-apt">Nome: </span>{{ $singleApt->name }}
                        </li>
                        <li>
                            <span class="span-info-apt">Indirizzo: </span>{{ $singleApt->address }}
                        </li>
                        <li>
                            <span class="span-info-apt">Metratura: </span>{{ $singleApt->square_meter }} mq
                        </li>
                        <li>
                            <span class="span-info-apt">Prezzo: </span>{{ $singleApt->price }} &euro;
                        </li>
                    </ul>
                    
                </div>
                <div class="col-2 col-md-5 pt-3 py-3">
                    <h3>
                        Azioni
                    </h3>
                    <div class="my-2">
                        <a href="{{ route('admin.apartment.edit', ['apartment' => $singleApt->id]) }}" class="btn btn-create-card">Modifica</a>
                    </div>
                    <div class="my-2">
                        <a href="{{ route('admin.apartment.show', ['apartment' => $singleApt->id]) }}" class="btn btn-create-card">Visualizza</a>
                    </div>
                        
                    <form action="{{route('admin.apartment.destroy',['apartment'=>$singleApt->id])}}" method="POST" class="my-1 d-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-create-card btn-create-card-out">
                                Elimina
                        </button>
                    </form>
                </div>
            </div>



            <div class="d-flex" style="width: 18rem;">
                
                <div class="card-body">
                    <h5 class="card-title">
                        
                    </h5>
                    <div class="card-text">
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection