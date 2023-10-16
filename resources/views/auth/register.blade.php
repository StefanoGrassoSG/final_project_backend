@extends('layouts.guest')

@section('main-content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Name -->
        <div>
            <label for="name">
                Name
            </label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="name">
                Last name
            </label>
            <input type="text" id="name" name="last_name">
        </div>


        <!-- date -->
        <div class="mt-4">
            <label for="email">
                Date of birth
            </label>
            <input type="date" id="email" name="date_of_birth">
        </div>

        <!-- email -->
        <div class="mt-4">
            <label for="password">
                Email
            </label>
            <input type="password" id="password" name="email">
        </div>


        <!-- Password -->
        <div class="mt-4">
            <label for="password">
                Password
            </label>
            <input type="password" id="password" name="password">
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation">
                Conferma Password
            </label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div>
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit">
                Register
            </button>
        </div>
    </form>
@endsection