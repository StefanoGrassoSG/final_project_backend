@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row my-row">
        <div class="col">
            <div class="title-main d-flex align-items-center">
                <h1>
                    Le Statistiche dei tuoi bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
                </h1>
                <img src="{{ Vite::asset('resources/img/icon_stat.png') }}" alt="" class="logo-add-create d-none d-sm-block">
            </div>

            <div class="stats-container d-flex flex-wrap justify-content-between">
                <div class="card-stats border rounded-4 col-4">
                    <a href="{{ route('admin.message.index') }}">
                        <div class="count-text-one">
                            Hai
                        </div>
                        <div class="count-number-card">
                           {{ $mess }}
                        </div>
                        <div class="count-text-two">
                            Messaggi
                        </div>
                    </a>
                </div>
                <div class="card-stats border rounded-4 col-4">
                    <div class="count-text-one">
                        Hai
                    </div>
                    <div class="count-number-card">
                        {{ $apartments }}
                    </div>
                    <div class="count-text-two">
                        Appartamenti
                    </div>
                </div>
                <div class="card-stats border rounded-4 col-4">
                    <div class="count-text-one">
                        Hai
                    </div>
                    <div class="count-number-card">
                        150
                    </div>
                    <div class="count-text-two">
                        Visualizzazioni
                    </div>
                </div>
                <div class="card-stats border rounded-4 col-4">
                    <a href="{{ route('admin.message.index') }}">
                        <div class="count-text-one">
                            Hai
                        </div>
                        <div class="count-number-card">
                           {{ $sponsor }}
                        </div>
                        <div class="count-text-two">
                            Bool Sponsor
                        </div>
                    </a>
                </div>
                <div class="card-stats-large card-stats border rounded-4 col-6">
                    <a href="{{ route('admin.message.index') }}">
                        <div class="count-text-one">
                            L'appartamento più visto:
                        </div>
                        <div class="count-number-card">
                            Nome app
                        </div>
                        <div class="count-text-two">
                            Ha 100 visualizzazioni
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection