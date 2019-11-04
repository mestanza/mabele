<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mabele</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <style>
            *{
                font-family: 'Cairo', sans-serif;
            }
            html, body {
                

                background: rgba(255,194,120,1);
                background: -moz-linear-gradient(left, rgba(255,194,120,1) 0%, rgba(255,194,120,1) 15%, rgba(255,146,10,1) 100%);
                background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,194,120,1)), color-stop(15%, rgba(255,194,120,1)), color-stop(100%, rgba(255,146,10,1)));
                background: -webkit-linear-gradient(left, rgba(255,194,120,1) 0%, rgba(255,194,120,1) 15%, rgba(255,146,10,1) 100%);
                background: -o-linear-gradient(left, rgba(255,194,120,1) 0%, rgba(255,194,120,1) 15%, rgba(255,146,10,1) 100%);
                background: -ms-linear-gradient(left, rgba(255,194,120,1) 0%, rgba(255,194,120,1) 15%, rgba(255,146,10,1) 100%);
                background: linear-gradient(to right, rgba(255,194,120,1) 0%, rgba(255,194,120,1) 15%, rgba(255,146,10,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffc278', endColorstr='#ff920a', GradientType=1 );

                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mabele
                </div>
            </div>
            <br>

        </div>
        <div class="container flex-center   ">
                <div class=" justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
            
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
