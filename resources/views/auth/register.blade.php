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
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>


        <style>
            .page-holder {
                min-height: 110vh;
            }
            .bg-cover {
            background-size: cover !important;
            }
            
            .login {
                background-image: url('{{asset("/img/Register.jpg")}}');
                background-size: cover;
                font-family: 'Ubuntu', sans-serif;
                height: 100%; 
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
    <div class="login page-holder bg-cover">
    <nav class="navbar navbar-light bg-light navbar-expand-lg" style="background :none !important ">
                    <ul class="navbar-nav px-3 justify-content-end ml-auto">
                        <li class="nav-item" style="padding-top: 12px; color: #B6B6B6">
                            Already have an account? <a href="/login">Login</a> 
                        </li>
                    </ul>
                </nav>
    <div class="jumbotron d-flex align-items-center justify-content-end" style="background :none !important; margin-left: 160px">
        <div class="container justify-content-end">
            <div class="row justify-content-end align-items-center">
                <div class="col-6">
                    <div class="card" style="border: none; padding-left: 20px; padding-top: 15px">
                        <div class="card-body">
                        <h1 style="padding-left: 10px; font-size: 3vw"> <b>Create Account</b> </h1>
                        <br>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="name" class="col-md-4 col-form-label"> <b>{{ __('Username') }}</b></label>

                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="background-color: #F5F2F2; border-radius: 10px">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-4 col-form-label"> <b>{{ __('E-Mail') }}</b></label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="background-color: #F5F2F2; border-radius: 10px">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="form-group col-md-6">
                                        <label for="password" class="col-md-6 col-form-label"><b>{{ __('Password') }}</b></label>

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="background-color: #F5F2F2; border-radius: 10px">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password-confirm" class="col-md-6 col-form-label"><b>{{ __('Confirm') }}</b></label>

                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color: #F5F2F2; border-radius: 10px">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check" style="margin-left: 20px; color: #B6B6B6">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="border-color: #B6B6B6" >
                                    <label class="form-check-label" for="exampleCheck1">By creating an account you agree to the Terms of Service and Conditions, and Privacy Policy</label>
                                </div>
                                <br>
                                <div class="form-group row mb-0">
                                    <div class="col-md-12" style="margin-left: 15px">
                                        <button type="submit" class="btn btn-primary" style="padding-left: 167px; padding-right: 167px; background-color: #FF9985 !important; border-style: none !important; color:white !important; border-radius: 10px">
                                          <b>{{ __('Create Account') }}</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
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