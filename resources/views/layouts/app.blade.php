<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Quickstart - Basic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- client.css -->
    <link rel="stylesheet" href="{{ asset('client.css') }}">
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
                        <a class="navbar-brand" href="#">Laravel Quickstart</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div id="content">
    @yield('content')
</div>
</body>
</html>
