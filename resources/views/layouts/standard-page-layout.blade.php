<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <title>Awesome-O</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @if(isset($data))
        @if($data["pagetype"] === "index")
            <div class="flex-center position-ref full-height">
                @include("includes.navbar")
                @yield("content")
            </div>
        @else
            <div id="app">
                <div class="navbar-push-content-down">
                    @include("includes.navbar")
                </div>
                @yield("content")
            </div>
        @endif
    @else
        <div id="app">
            <div class="navbar-push-content-down">
                @include("includes.navbar")
            </div>
            @yield("content")
        </div>
    @endif
</body>
</html>