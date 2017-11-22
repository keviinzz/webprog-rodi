<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CodeDB</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>


</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse navbar-static-top">
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
                    CodeDB
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/browse') }}">Browse</a></li>
                    <li><a href="{{ url('/') }}">About</a></li>
                    <li><a href="{{ url('/') }}">Admin menu</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <form class="navbar-form navbar-right">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Go</button>
            </form>
            </div>
        </div>
    </nav>

    
        <div class="content">
            <div class="container-fluid">
            <div class="row">

        <div class="col-md-2  sidenav" >
        
        <div class="panel panel-default">
            <div class="panel-body donation"> 
                <p>Monthly goal: $1000</p> 
                <p>70%</p>
                <div class="progress donation-meter">
                        
                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                
                    </div>
                </div> 
                
                <button type="button" class="btn btn-primary">Support us</button>
            </div>
        </div>
            
        Categories
        <ul class="list-unstyled">

              <li>  <a href="#">Algorithm</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                  <li> <a href="#">Greedy</a></li>
        
                  <li> <a href="#">Divide and Conquer</a></li>
                </ul>
        
              </li>

              <li>  <a href="#">Algorithm</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a> 
                  <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                </ul></li>
        
                </ul>
        
              </li>
        
              <li>  <a href="#">Implementations</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                </ul>
        
              </li>
        
              <li>  <a href="#">Algorithm</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                  <li> <a href="#">Greedy</a></li>
        
                  <li> <a href="#">Divide and Conquer</a></li>
                </ul>
        
              </li>

              <li>  <a href="#">Algorithm</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a> 
                  <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                </ul></li>
        
                </ul>
        
              </li>
        
              <li>  <a href="#">Implementations</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                </ul>
        
              </li>
        
              <li>  <a href="#">Algorithm</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                  <li> <a href="#">Greedy</a></li>
        
                  <li> <a href="#">Divide and Conquer</a></li>
                </ul>
        
              </li>

              <li>  <a href="#">Algorithm</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a> 
                  <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                </ul></li>
        
                </ul>
        
              </li>
        
              <li>  <a href="#">Implementations</a>
                <ul>
        
                  <li> <a href="#">Searching</a></li>
        
                  <li> <a href="#">Sorting</a></li>
        
                </ul>
        
              </li>
        
              <li></li>
        
            </ul>
        
        </div>
             <div class="col-md-8 col-md-offset-1">
                @yield('content')
                </div >
       

            </div>
        </div>
       
        </div>



    <footer>
    <div class="container-fluid">
      
            <div class="container">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                                <h4> Lorem Ipsum </h4>
                                <ul>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                </ul>
                            </div>
                            <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                                <h4> Lorem Ipsum </h4>
                                <ul>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                </ul>
                            </div>
                            <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                                <h4> Lorem Ipsum </h4>
                                <ul>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                    <li class="list-unstyled"> <a href="#"> Lorem Ipsum </a> </li>
                                </ul>
                            </div>
                            <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                                <h4> Contact us </h4>
                                <ul class="social">
                                <ul class="nav nav-pills payments">
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-twitter"></i></li>
                                <li><i class="fa fa-pinterest"></i></li>
                                <li><i class="fa fa-youtube"></i></li>
                            </ul> 
                            </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
       
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p> Copyright © CodeDB 2017. All right reserved. </p>
        </div>
    </div>
    </footer>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
