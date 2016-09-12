<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EXIM</title>
    <link href="css/app.css" rel="stylesheet">
  	<link href="css/style.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://unpkg.com/angular-toastr/dist/angular-toastr.css" />

  	<!-- Fonts -->
  	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
    /*
     * The MIT License
     * Copyright (c) 2012 Matias Meno <m@tias.me>
     */

        body {
            
            background: url({{asset('file/bg.jpg')}}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .fa-btn {
            margin-right: 6px;
        }

    </style>
    <script>
      var baseUrl='{{url('/')}}';
    </script>
</head>
<body ng-app="myApp" id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    EXIM
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                </ul>
                    @else
                      <ul class="nav navbar-nav">
                        <li><a href="{{ url('/home') }}">Dashboard</a></li>
                        <li><a href="{{ url('/todos') }}">List OutStanding Job</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Import <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{asset('/import/by_air')}}">Import By AIR</a></li>
                              <li><a href="{{asset('/import/by_sea')}}">Import By SEA</a></li>
                              <li><a href="{{asset('/import/sk_sea')}}">Surat Kuasa Import By SEA</a></li>
                              <li><a href="#">Surat Kuasa Import By AIR</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Export <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Export By AIR</a></li>
                              <li><a href="#">Export By SEA</a></li>
                              <li><a href="#">Shiping Instruction By SEA</a></li>
                              <li><a href="#">Shiping Instruction By AIR</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Government <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Report Monthly</a></li>
                              <li><a href="#">Report API-P Monthly</a></li>
                              <li><a href="#">Report API-P 3 Monthly</a></li>
                              <li><a href="#">Receiving Import Part Monthly</a></li>
                              <li><a href="#">Receiving CKD Monthly</a></li>
                            </ul>
                        </li>
                      </ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Welcome : {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif

            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    {{-- angular --}}
  	<script src="js/angular.min.js"></script>
  	<script src="https://unpkg.com/angular-toastr/dist/angular-toastr.tpls.js"></script>

  	<script src="scripts/app.js"></script>
  	<script src="scripts/controllers/todo-controller.js"></script>
  	{{-- # angular --}}
    <script type="text/javascript">
      $(document).ready(function() {
      $('#import_by_air').DataTable();
      } );
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
      $('#import_by_sea').DataTable();
      } );
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
