@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
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