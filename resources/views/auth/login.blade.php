<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="/css/login.css" rel="stylesheet">

        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>


        <style>
            .page-holder {
                min-height: 100vh;
            }
            .bg-cover {
            background-size: cover !important;
            }
            .login {
                background-image: url('{{asset("/img/Login.jpg")}}');
                font-family: 'Segoe UI', sans-serif;
                background-size: cover;
                background-attachment: fixed;
                height: 100%; 
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
    <div class="login page-holder bg-cover">
    <div class="jumbotron d-flex align-items-center justify-content-start" style="background :none !important; margin-right: 200px">
        <div class="container justify-content-start">
            <div class="row justify-content-start align-items-center">
                <div class="col-md-8">
                <h1 style="padding-left: 33px; font-size: 70px; color:#F737B0"> <b>Hey Hooman</b>
              <img src="/img/Paw.png" alt="" width="80" height="80"></h1>
                 
                    <h1 style="padding-left: 33px; font-size: 3vw; color:#F737B0"> <b>Welcome Back!</b> </h1>
                        <br>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email" class="col-md-4 col-form-label" style="color:#F737B0"><b>{{ __('Email') }}</b></label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background-color: #F8C3E4; border-radius: 40px">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-4 col-form-label" style="margin-top: 15px; color:#F737B0"><b>{{ __('Password') }}</b></label>

                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="background-color: #F8C3E4; border-radius: 40px">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row" style="margin-left: 1px; color: #F192CD">
                                    <div class="col-md-6">
                                        <div class="form-check" style="margin-top: 6px">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                               <b>{{ __('Remember Me') }}</b> 
                                            </label>
                                        </div>
                                    </div>
                                    @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" style="margin-left: -80px; margin-top: 6px; color:#F737B0 ">
                                               <b>{{ __('Forgot Your Password?') }}</b> 
                                            </a>
                                        @endif
                                </div>
                                <br>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8" style="margin-left: 15px">
                                        <button type="submit" class="btn btn-primary" style="padding-left: 190px; padding-right: 190px; background-color: #F737B0 !important; border-style: none !important; color:white !important; border-radius: 40px">
                                           <b>{{ __('Log In') }}</b> 
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center" style="color: #F192CD; margin-top: 10px; margin-right: 220px">
                                   <b>Don't have an account?</b>  <a href="/register" style="margin-left: 5px; color: #F737B0"> <b>Create Account</b> </a> 
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    </body>
</html>