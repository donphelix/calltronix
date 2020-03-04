<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container"><br><br><br><br><br><br>
                <div class="jumbotron text-center">
                    
                    @if (Route::has('login'))
                        @auth
                        <h4>This is is blank for now but it should be filled when all are implemented

                        </h4>
                            <a href="{{ url('/home') }}" class="btn btn-primary">Check out trucks</a>
                        @else
                        <h1>Call Tronix</h1>
                            <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            
        </div>
    </body>
</html>
