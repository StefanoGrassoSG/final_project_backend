@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row my-row ">
        <div class="col">
            <div class="title-main d-flex align-items-center">
                <div>
                    <h1>
                        I tuoi messaggi
                    </h1>
                </div>
                <img src="{{ Vite::asset('resources/img/logo_messaggi.png') }}" alt="" class="logo-add-create d-none d-sm-block">
            </div>

                
            <form action="{{ route('admin.single') }}" method="get" class="ms-5 mb-3">
                @csrf
                <label for="search">Filtra per appartamento</label>
                <select id="search" name="apt_message">
                    @foreach ($apartments as $singleApt)
                        <option
                        @if($apt->id == $singleApt->id)
                            selected="selected"
                        @endif
                        value="{{ $singleApt->id }}">{{ $singleApt->name }}</option>
                    @endforeach
                </select>
                <button type="submit">cerca</button>
            </form>
       


            @foreach ($mess as $singleMessage)
                <div class="card-message mb-3 p-3 border rounded-4">
                    <h3>    
                        {{ $singleMessage->name }}
                    </h3>
                    <p>
                        <div>
                            <span class="fw-bold">Oggetto: </span>{{$singleMessage->object}}
                        </div>
                        <div>
                            <span class="fw-bold">Appartamento: </span>{{$singleMessage->apartment_id}}
                        </div>
                    </p>
                    {{ $singleMessage->content }}
                    <form action="{{route('admin.message.destroy',['message'=> $singleMessage->id])}}" method="POST" class="mt-3">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-create-card btn-create-card-out">
                          Delete
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection