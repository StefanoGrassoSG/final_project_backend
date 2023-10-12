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
          <form action="{{route('admin.apartment.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">rooms</label>
                  <input type="number" class="form-control" id="room" name="room" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">bathroom's number</label>
                  <input type="number" class="form-control" id="bathroom" name="bathroom" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">bed's number</label>
                  <input type="number" class="form-control" id="bed" name="bed" aria-describedby="emailHelp">
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="shared_bathroom" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    shared bathroom
                  </label>
                </div>
                <div class="mb-3">
                  <label for="address" class="form-label">address</label>
                  <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="city" class="form-label">city</label>
                  <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp">
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="visible" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    not visible
                  </label>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">name</label>
                  <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">price</label>
                  <input type="number" step=".01" class="form-control" id="price" name="price" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="square_meter" class="form-label">square meters</label>
                  <input type="number" class="form-control" id="square_meter" name="square_meter" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">description</label>
                  <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="cover_img" class="form-label">cover image</label>
                  <input type="file" class="form-control" accept="image/*" id="cover_img" name="cover_img" aria-describedby="emailHelp">
                </div>
                <div>
                  @foreach ($service as $singleService)
                    <label for="service-{{$singleService->id}}">{{$singleService->name}}</label>
                    <input type="checkbox" name="service[]" id="service-{{$singleService->id}}" value="{{$singleService->id}}">
                  @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection