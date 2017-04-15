<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ArkBreedingXmlStatCombiner</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/signin.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/main.css?v1.3') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        @section('header')

        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('/')}}">ArkBreedingXmlStatCombiner</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li {{ Request::is('/home') ? ' class="active"' : null }}><a href="{{URL::to('/home')}}">Home</a></li>
                        <li {{ Request::is('/seasons') ? ' class="active"' : null }}><a href="{{URL::to('/seasons')}}">Seasons</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        @show


        @yield('content')

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- <script src="{{ URL::asset('js/main.js') }}"></script> -->
<!-- <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script> -->

</body>

</html>
