@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <ul>
                        <a href="{{ route('admin.apartment.create') }}" class="btn btn-primary">create</a>
                        @foreach ($apartments as $singleApt)
                            <li>
                                {{ $singleApt->name }}

                                <a href="{{ route('admin.apartment.show', ['apartment' => $singleApt->id]) }}" class="btn btn-primary">view single</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection