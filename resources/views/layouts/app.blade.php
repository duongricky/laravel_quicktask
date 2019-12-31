<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ trans('custome.laravel_quickstart') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/fontawesome.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <nav class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><b>{{ trans('custome.laravel_quickstart') }}</b></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div id="content">
    @yield('content')
</div>
    <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
