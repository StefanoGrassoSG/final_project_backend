@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            @foreach ($messages as $singleMessage)
                <div class="card mb-2">
                    <h2>
                        {{ $singleMessage[0]->name }}
                    </h2>
                    {{ $singleMessage[0]->content }}
                </div>
            @endforeach
        </div>
    </div>
@endsection