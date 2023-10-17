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
                
                <div class="main-container-login">
                    
                    <div class="main-main-login">

                        <div class="title">

                            <h2>
                                <span>b</span>-everywhere with <span>boolbnb</span>
                            </h2>
                            
                        </div>

                        <div class="card-login">

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                        
                                <!-- Email Address -->
                                <div>
                                    <label for="email">
                                        Email
                                    </label>
                                    <input type="email" id="email" name="email">
                                </div>
                        
                                <!-- Password -->
                                <div class="mt-4">
                                    <label for="password">
                                        Password
                                    </label>
                                    <input type="password" id="password" name="password">
                                </div>
                        
                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me">
                                        <input id="remember_me" type="checkbox" name="remember">
                                        <span>Remember me</span>
                                    </label>
                                </div>
                        
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Hai dimenticato la password?') }}
                                        </a>
                                    @endif
                        
                                    <button type="submit">
                                        Log in
                                    </button>
                                </div>

                                <div>
                                    <a href="{{ route('register') }}">
                                        {{ __('Non sei registrato? clicca qui!') }}
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
