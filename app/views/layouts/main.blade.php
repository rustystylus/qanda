<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RustyStylus</title>
    <!-- Latest compiled and minified CSS -->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}
    <!-- Optional theme -->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css')}}
    {{ HTML::style('css/jquery.dataTables.css') }}
    {{ HTML::style('css/jquery.dataTables.min.css') }}
    {{ HTML::style('css/jquery.dataTables_themeroller.css') }}
    {{ HTML::style('css/main.css')}}
    <!-- Latest compiled and minified JavaScript -->
    {{ HTML::script('js/jquery.js')}}
    {{ HTML::script('js/jquery.dataTables.min.js')}}

    {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
            <div class="nav navbar-header">
                  <a href="{{ URL::to('users/dashboard') }}" class="navbar-brand">
                      {{ HTML::image('logo.png', 'logo') }}
                  </a>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
            </div>
            <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                        @if(!Auth::check())
                            <li>{{ HTML::link('users/register', 'Register') }}</li>
                            <li>{{ HTML::link('users/login', 'Login') }}</li>
                        @else
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Apps <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>{{ HTML::link('questions', 'Qanda') }}</li>
                                    <li>{{ HTML::link('todos', 'Todo') }}</li>
                                    <li>{{ HTML::link('users/restapi', 'RestAPI') }}</li>
                                    <li class="divider"></li>
                                    @if (Auth::user()->id == 5)
                                    <li>{{ HTML::link('form', 'Upload Spreadsheet') }}</li>
                                    @endif
                                    <li>{{ HTML::link('Rmexcel', 'Show Spreadsheet Table') }}</li>
                                </ul>
                            </li>
                        @endif
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li>{{ HTML::link('users/logout', Auth::user()->email.' logout') }}</li>
                    @endif
                  </ul>
            </div>
    </div>

    </div>

     <div class="container">
        <div class="col-md-4">

            @if(Session::has('message'))
                <p class="alert">{{ Session::get('message') }}</p>
            @endif

        </div>

        <div class="col-md-4">
           {{ $content }}
        </div>

        <div class="col-md-4">
        </div>
    </div>

</body>
</html>
