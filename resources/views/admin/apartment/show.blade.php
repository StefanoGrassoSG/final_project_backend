@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="container-show">
        <div class="row my-row justify-content-start">
            @if(count($apartment->sponsorships) > 0)
               @php $lastSponsor = $apartment->sponsorships[count($apartment->sponsorships) - 1]->pivot->end_date;
                    $startSponsor = $apartment->sponsorships[count($apartment->sponsorships) - 1]->pivot->start_date;
               @endphp
               @if($lastSponsor >= $todayDate)
                    la tua sponsor finisce {{ $lastSponsor }}
               @endif
            @endif
            <div class="title-main d-flex align-items-center ps-0">
                <h1>
                  Il tuo bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
                </h1>
                <img src="{{ Vite::asset('resources/img/logo_ultimate.png') }}" alt="" class="logo-add-create d-none d-sm-block">
            </div>
            <div class="col-6 ps-0 pe-0">
                <div class="img-fluid">
                    @if(str_starts_with($apartment->cover_img,'uploads'))
                        <img src="/storage/{{ $apartment->cover_img }}" alt="{{ $apartment->name }}" class="border rounded-4 w-100">
                    @else 
                        <img src="{{ $apartment->cover_img }}" alt="{{ $apartment->name }}" class="border rounded-4 w-100">
                    @endif
                </div>
            </div>
            <div class="col-6">
                <h2 class="h2-show">
                    {{ $apartment->name }}
                </h2>
                <div class="rounded-line"></div>
                <div class="info-single-ap">
                    <ul>
                        <li>
                            Ha <span>{{ $apartment->room }}</span> camere
                        </li>
                        <li>
                            Ha <span>{{ $apartment->bed }}</span> letti
                        </li>
                        <li>
                            Ha <span>{{ $apartment->bathroom }}</span> bagni
                        </li>
                        <li>
                            @if ($apartment->shared_bathroom === true)
                            Bagno condiviso: <span>si</span>
                            @else
                            Bagno condiviso: <span>no</span>
                            @endif
                        </li>
                        <li>
                            @if ($apartment->visible === true)
                            App. visibile: <span>si</span>
                            @else
                            App. visibile: <span>no</span>
                            @endif
                        </li>
                        <li>
                            Il prezzo è: <span>{{ $apartment->price }} €</span>
                        </li>
                        <li>
                            la metratura dell'app è: <span>{{ $apartment->square_meter }} mq.</span>
                        </li>
                    </ul>
                    <h4 class="description-card">
                        Servizi:
                    </h4>
                    <ul>
                        @foreach ($apartment->services as $service)
                        <li>{{ $service->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-6 p-0">
                <div class="p-4 border rounded-4 mt-3">
                    <h4 class="description-card">
                        Descrizione:
                    </h4>                    
                    <p>{{ $apartment->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection