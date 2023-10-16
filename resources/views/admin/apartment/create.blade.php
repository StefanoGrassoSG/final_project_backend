@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row my-row">
        <div class="col">
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

          <div class="title-main d-flex align-items-center">
              <h1>
                Inserisci il tuo bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
              </h1>
              <img src="{{ Vite::asset('resources/img/icon_add_ap.png') }}" alt="" class="logo-add-create d-none d-sm-block">
          </div>
          <form action="{{route('admin.apartment.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="d-flex align-items-center">
              <div class="mb-4 col-12 col-md-6">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
              </div>
            </div>

            <div class="d-flex flex-wrap align-items-center">
              <div class="mb-4 me-5 col-12 col-md-3">
                  <label for="exampleInputEmail1" class="form-label">Stanze</label>
                  <input type="number" class="form-control" id="room" name="room" aria-describedby="emailHelp">
                </div>
                <div class="mb-4 me-5 col-12 col-md-3">
                  <label for="exampleInputEmail1" class="form-label">N. letti</label>
                  <input type="number" class="form-control" id="bed" name="bed" aria-describedby="emailHelp">
                </div>
                <div class="mb-4 me-5 col-12 col-md-3">
                  <label for="exampleInputEmail1" class="form-label">N. bagni</label>
                  <input type="number" class="form-control" id="bathroom" name="bathroom" aria-describedby="emailHelp">
                </div>
                <div class="form-check me-2 mb-4 me-5 col-12 col-md-3">
                  <input class="form-check-input" type="checkbox" name="shared_bathroom" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Bagno condiviso
                  </label>
                </div>
            </div>

            <div class="d-flex flex-wrap align-items-center">
              <div class="mb-4 col-12 col-md-3 me-5">
                  <label for="city" class="form-label">Città</label>
                  <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp">
                </div>
                <div class="mb-4 col-12 col-md-8">
                  <label for="address" class="form-label">Indirizzo</label>
                  <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">
                </div>
            </div>
            
            <div class="d-flex align-items-center flex-wrap">
              <div class="mb-4 col-12 col-md-3 me-5">
                  <label for="square_meter" class="form-label">Metratura</label>
                  <input type="number" class="form-control" id="square_meter" name="square_meter" aria-describedby="emailHelp">
              </div>
              <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" name="visible" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Non visibile
                  </label>
              </div>
            </div>

            <div class="d-flex align-items-center">
              <div class="mb-4">
                <div>
                  <label class="mb-2">
                    Servizi
                  </label>
                </div>
                @foreach ($service as $singleService)
                <div class="check-box-services">
                  <label for="service-{{$singleService->id}}" class="check-services">{{$singleService->name}}</label>
                  <input class="me-4 mb-4 check-box-services-input" type="checkbox" name="service[]" id="service-{{$singleService->id}}" value="{{$singleService->id}}">
                </div>  
                @endforeach
              </div>
            </div>

            <div class="mb-4 col-12 col-md-3">
              <label for="price" class="form-label">Prezzo</label>
              <input type="number" step=".01" class="form-control" id="price" name="price" aria-describedby="emailHelp">
            </div>

            <div class="mb-4 col-12 col-md-10">
              <label for="description" class="form-label">Descrizione</label>
              <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp">
            </div>

            <div class="d-flex flex-wrap align-items-center">
              <div class="col-12 col-md-5 mb-4">
                <label for="cover_img" class="form-label">Immagine di copertina</label>
                <input type="file" class="form-control" accept="image/*" id="cover_img" name="cover_img" aria-describedby="emailHelp">
              </div>
              <div class="col-12 col-md-5 mx-0 mx-md-5 mb-4">                  
                {{-- <label for="add_imgs"> add more images</label>
                <input class="form-check-input" type="checkbox" name="xxx" value="" id="flexCheckDefault">
                <br> --}}
                <label for="extra_imgs" class="form-label">Aggiungi altre immagini </label>
                <input type="file" class="form-control" accept="image/*" id="extra_imgs" name="extra_imgs[]" aria-describedby="emailHelp" multiple>
              </div>
            </div>  
            <button type="submit" class="btn my-5 btn-create-form">
              Invia
            </button>
          </form>
        </div>
    </div>
@endsection