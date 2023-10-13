@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card my-6">
                <div class="card-body ">
                    <ul>
                        <a href="{{ route('admin.apartment.create') }}" class="btn btn-primary">create</a>
                        @foreach ($apartments as $singleApt)
                            <li>
                                {{ $singleApt->name }}
                                <div class="img-fluid">
                                    {{-- condizione per differenziare le immagini tra url e nello storage --}}
                                    @if(str_starts_with($singleApt->cover_img,'uploads'))
                                        <img src="/storage/{{ $singleApt->cover_img }}" alt="{{ $singleApt->name }}" class="object-fit-contain">
                                    @else 
                                        <img src="{{ $singleApt->cover_img }}" alt="{{ $singleApt->name }}" class="object-fit-contain">
                                    @endif
                                </div>
                                <a href="{{ route('admin.apartment.edit', ['apartment' => $singleApt->id]) }}" class="btn btn-primary">edit</a>
                                <a href="{{ route('admin.apartment.show', ['apartment' => $singleApt->id]) }}" class="btn btn-primary">view single</a>
                                <a href="{{ route('admin.message.show', ['message' => $singleApt->id]) }}" class="btn btn-primary">view messages</a>
                                <form action="{{route('admin.message.destroy',['message'=>$singleApt->id])}}" method="POST" class="my-1">
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