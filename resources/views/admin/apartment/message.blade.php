@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            @foreach ($messages as $singleMessage)
                <div class="card mb-2">
                    <h2>
    
                        {{ $singleMessage->name }}
                    </h2>
                    {{ $singleMessage->content }}
                    <form action="{{route('admin.message.destroy',['message'=> $singleMessage->id])}}" method="POST" class="my-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                          Delete
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection