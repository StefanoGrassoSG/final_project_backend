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
                                <div class="img-fluid">
                                    @if(str_starts_with($singleApt->cover_img,'uploads'))
                                        <img src="/storage/{{ $singleApt->cover_img }}" alt="{{ $singleApt->name }}">
                                    @else 
                                        <img src="{{ $singleApt->cover_img }}" alt="{{ $singleApt->name }}">
                                    @endif
                                </div>
                                <a href="{{ route('admin.apartment.edit', ['apartment' => $singleApt->id]) }}" class="btn btn-primary">edit</a>
                                <a href="{{ route('admin.apartment.show', ['apartment' => $singleApt->id]) }}" class="btn btn-primary">view single</a>
                                <form action="{{route('admin.apartment.destroy',['apartment'=>$singleApt->id])}}" method="POST" class="my-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                      Delete
                                    </button>
                                  </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection