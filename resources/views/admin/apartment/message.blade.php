@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row row-index">
        <div class="col">
            <div class="title-create d-flex align-items-center">
                <h1>
                  I tuoi messaggi
                </h1>
                <img src="{{ Vite::asset('resources/img/logo_messaggi.png') }}" alt="" class="logo-add-create">
            </div>
            @foreach ($messages as $singleMessage)
                <div class="card-message mb-3 p-3 border rounded-4">
                    <h2>    
                        {{ $singleMessage->name }}
                    </h2>
                    <p>
                        INFO APPARTAMENTO ????????

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