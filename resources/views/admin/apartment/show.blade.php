@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                {{ $apartment->name }}
            </div>
        </div>
    </div>
@endsection