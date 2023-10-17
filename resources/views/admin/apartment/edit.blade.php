@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row my-row ">
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
              Modifica il tuo bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
            </h1>
            <img src="{{ Vite::asset('resources/img/icon_edit.png') }}" alt="" class="logo-add-create d-none d-sm-block">
        </div>
          <form action="{{route('admin.apartment.update', ['apartment' => $apartment->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="d-flex align-items-center">
              <div class="mb-4 col-12 col-md-6">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $apartment->name) }}" aria-describedby="emailHelp" max="64" required>
              </div>
            </div>

            <div class="d-flex flex-wrap align-items-center">            
              <div class="mb-4 me-5 col-12 col-md-3">
                <label for="exampleInputEmail1" class="form-label">Stanze</label>
                <input type="number" class="form-control" id="room" name="room" value="{{ old('room', $apartment->room) }}" aria-describedby="emailHelp" min="1" max="100" required>
              </div>
              <div class="mb-4 me-5 col-12 col-md-3">
                <label for="exampleInputEmail1" class="form-label">N. letti</label>
                <input type="number" class="form-control" id="bed" name="bed" value="{{ old('bed', $apartment->bed) }}" aria-describedby="emailHelp" min="1" max="100" required>
              </div>
              <div class="mb-4 me-5 col-12 col-md-3">
                <label for="exampleInputEmail1" class="form-label">N. bagni</label>
                <input type="number" class="form-control" id="bathroom" name="bathroom" value="{{ old('room', $apartment->bathroom) }}" aria-describedby="emailHelp" min="1" max="100" required>
              </div>            
              <div class="form-check mb-4 me-5 col-12 col-md-3">
                <input class="form-check-input" type="checkbox" name="shared_bathroom" value="{{ old('shared_bathroom', $apartment->shared_bathroom) }}" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Bagno condiviso
                </label>
              </div>            
            </div>

            {{-- <div class="d-flex flex-wrap align-items-center">
              <div class="mb-4 col-12 col-md-3 me-5">
                <label for="city" class="form-label">Città</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $apartment->city) }}" aria-describedby="emailHelp">
              </div> --}}
              <div class="mb-4 col-12 col-md-8">
                <label for="address" class="form-label">Indirizzo Completo (Esempio: Via Vittorio Veneto 1, Roma) </label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $apartment->address) }}" aria-describedby="emailHelp">
              </div>
            </div>

            <div class="d-flex align-items-center flex-wrap">
              <div class="mb-4 col-12 col-md-3 me-5">
                <label for="square_meter" class="form-label">Metratura</label>
                <input type="number" class="form-control" id="square_meter" name="square_meter" value="{{ old('square_meter', $apartment->square_meter) }}" aria-describedby="emailHelp" min="1" max="9999" required>
              </div>
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" name="visible"  value="" id="check-visible">
                <label class="form-check-label" for="check-visible">
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
                  <label for="service-{{$singleService->id}}">{{$singleService->name}}</label>
                  <input class="me-4 mb-4 check-box-services-input" type="checkbox" name="service[]" id="service-{{$singleService->id}}" value="{{$singleService->id}}"
                  @foreach ($aptSrvices as $single)
                      @if ($singleService->id == $single->id)
                          checked
                      @endif
                  @endforeach
                  >
                </div>
                @endforeach
              </div>
            </div>
            
            
            <div class="mb-4 col-12 col-md-3">
              <div class="mb-4">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" step=".01" class="form-control" id="price" name="price" value="{{ old('price', $apartment->price) }}" aria-describedby="emailHelp" min="1" max="9999" required>
              </div>
            </div>
            

            <div class="mb-4 col-12 col-md-10">
              <label for="description" class="form-label">Descrizione</label>
              <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $apartment->description) }}" aria-describedby="emailHelp">
            </div>
            
            <div class="d-flex flex-wrap align-items-center">
              <div class="col-12 col-md-5 mb-4">
                <label for="cover_img" class="form-label">Cambia Immagine</label>
                <input type="file" class="form-control" accept="image/*" id="cover_img" name="cover_img" aria-describedby="emailHelp" max="9999" required>
              </div>

              <div class="col-12 col-md-5 mx-0 mx-md-5 mb-4">
                {{-- <label for="add_imgs"> add more images</label>
                <input class="form-check-input" type="checkbox" name="xxx" value="" id="flexCheckDefault">
                <br> --}}
                <label for="extra_imgs" class="form-label">Aggiungi altre immagini </label>
                <input type="file" class="form-control" accept="image/*" id="extra_imgs" name="extra_imgs[]" aria-describedby="emailHelp" multiple>
              </div>
            </div>


				          {{-- CAMPO PER LE IMMAGINI EXTRA --}}
                <div class="mb-4">

                    @if ($extra_images)
                    <label class="form-label">Immagini extra</label>
                      <div class="img-extra d-flex my-3 flex-wrap">
                        @foreach ($extra_images as $item)
                          <div class="col-12 col-md mb-5">
                            <div class="me-4">
                              {{-- input per elimiare le immagini in PIU --}}
                              <label for="delete_img_{{$item->id}}">Elimina</label>
                              <input type="checkbox" name="delete_imgs[{{$item->id}}]" id="delete_img_{{$item->id}}">
                                <div class="img-fluid border rounded-4">
                                  @if($item->path)
                                    <img src="/storage/{{ $item->path }}" alt="" class="object-fit-contain border rounded-4">
                                  @elseif($item->src) 
                                    <img src="{{ $item->src }}" alt="" class="object-fit-contain border rounded-4">
                                  @endif
                                </div>
                            </div>
                          </div>
                        @endforeach
                    @endif
                
                </div>
                <button type="submit" class="btn my-5 btn-create-form">Aggiorna</button>
            </form>
        </div>
    </div>
@endsection