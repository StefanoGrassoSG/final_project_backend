@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
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
          <div class="title-create d-flex align-items-center">
            <h1>
              Modifica il tuo bool<span class="b-blue">b</span>n<span class="b-blue">b</span>
            </h1>
            <img src="{{ Vite::asset('resources/img/icon_add_ap.png') }}" alt="" class="logo-add-create">
        </div>
          <form action="{{route('admin.apartment.update', ['apartment' => $apartment->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Stanze</label>
                  <input type="number" class="form-control" id="room" name="room" value="{{ old('room', $apartment->room) }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">N. bagni</label>
                  <input type="number" class="form-control" id="bathroom" name="bathroom" value="{{ old('room', $apartment->bathroom) }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">N. letti</label>
                  <input type="number" class="form-control" id="bed" name="bed" value="{{ old('bed', $apartment->bed) }}" aria-describedby="emailHelp">
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" name="shared_bathroom" value="{{ old('shared_bathroom', $apartment->shared_bathroom) }}" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Bagno condiviso
                  </label>
                </div>
                <div class="mb-4">
                  <label for="address" class="form-label">Indirizzo</label>
                  <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $apartment->address) }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="city" class="form-label">Città</label>
                  <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $apartment->city) }}" aria-describedby="emailHelp">
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" name="visible"  value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Non visibile
                  </label>
                </div>
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $apartment->name) }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="price" class="form-label">Prezzo</label>
                  <input type="number" step=".01" class="form-control" id="price" name="price" value="{{ old('price', $apartment->price) }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="square_meter" class="form-label">Metratura</label>
                  <input type="number" class="form-control" id="square_meter" name="square_meter" value="{{ old('square_meter', $apartment->square_meter) }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="description" class="form-label">Descrizione</label>
                  <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $apartment->description) }}" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                  <label for="cover_img" class="form-label">Cambia Immagine</label>
                  <input type="file" class="form-control" accept="image/*" id="cover_img" name="cover_img" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
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

                <div>
                  {{-- non mi prende la cazzo di checkbox nella request per dio --}}
                  {{-- <label for="add_imgs"> add more images</label>
                  <input class="form-check-input" type="checkbox" name="xxx" value="" id="flexCheckDefault">
                  <br> --}}
                  <label for="extra_imgs" class="form-label">Aggiungi altre immagini </label>
                  <input type="file" class="form-control" accept="image/*" id="extra_imgs" name="extra_imgs[]" aria-describedby="emailHelp" multiple>

                </div>
				{{-- CAMPO PER LE IMMAGINI EXTRA --}}
                <div class="my-4">
					
                  @if ($extra_images)
				  Img extra:
				  <div class="row my-4">
					@foreach ($extra_images as $item)
						<div class="col-auto">
							<div class="card">
								{{-- input per elimiare le immagini in PIU --}}
								<label for="delete_img_{{$item->id}}">Elimina</label>
								<input type="checkbox" name="delete_imgs[{{$item->id}}]" id="delete_img_{{$item->id}}">
									<div class="img-fluid">
										@if($item->path)
											<img src="/storage/{{ $item->path }}" alt="" class="object-fit-contain">
										@elseif($item->src) 
											<img src="{{ $item->path }}" alt="" class="object-fit-contain">
										@endif
									</div>
								
							</div>
						</div>
					@endforeach
				  
                  @endif
                </div>
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </form>
        </div>
    </div>
@endsection