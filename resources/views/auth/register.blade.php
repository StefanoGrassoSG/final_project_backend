<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
    <body>
        
        <main>
            <div class="main-section d-flex">
                
                <div class="main-container-register">
                    
                    <div class="main-main-register">

                        <div class="card-register">

                            <form method="POST" action="{{ route('register') }}">

                                <h2>
                                    Compila per registrarti!
                                </h2>

                                <div class="circle-1"></div>
                                <div class="circle-2"></div>
                                <div class="circle-3"></div>
                                <div class="circle-4"></div>
                                <div class="circle-5"></div>
                                <div class="circle-6"></div>

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
                                        Nome
                                    </label>
                                    <input type="text" id="name" name="name">
                                </div>
                        
                                <div>
                                    <label for="name">
                                        Cognome
                                    </label>
                                    <input type="text" id="name" name="last_name">
                                </div>
                        
                        
                                <!-- date -->
                                <div id="date" class="mt-4">
                                    <label for="email">
                                        Data di nascita
                                    </label>
                                    <input type="date" id="email" name="date_of_birth">
                                </div>
                        
                                <!-- email -->
                                <div class="mt-4">
                                    <label for="password">
                                        Email
                                    </label>
                                    <input type="email" id="password" name="email">
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
                        
                                <div class="register-button">

                                    <button type="submit">
                                        Registrati
                                    </button>

                                    <a href="{{ route('login') }}">
                                        {{ __('Sei già registrato? Clicca qui!') }}
                                    </a>
                        
                                </div>
                            </form>

                        </div>

                        
                    
                    </div>
                        
                </div>
            </div>
        </main>
        


    </body>
</html>


























