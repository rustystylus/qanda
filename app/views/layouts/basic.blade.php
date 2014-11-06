<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Qanda</title>
    <!-- Latest compiled and minified CSS -->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}
    <!-- Optional theme -->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css')}}
    {{ HTML::script('js/jquery.js')}}
    {{ HTML::script('js/jquery.dataTables.min.js')}}
    <!-- Latest compiled and minified JavaScript -->
    {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}

    {{ HTML::style('css/main.css')}}
</head>
 
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="nav navbar-header">    
		<a href="http://127.0.0.1/qanda/public/users/dashboard" class="brand">
		<img alt="" src="http://127.0.0.1/qanda/public/logo.png" />
		</a>	   
            </div>    

          <div class="container">
          <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
                @if(!Auth::check())
                    <li>{{ HTML::link('users/register', 'Register') }}</li>  
                    <li>{{ HTML::link('users/login', 'Login') }}</li>  
                @else                    
                    <li>{{ HTML::link('users/dashboard', 'Dashboard') }}</li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Apps <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>{{ HTML::link('users/qanda', 'Qanda') }}</li>
                            <li>{{ HTML::link('users/todo', 'ToDo') }}</li>
                            <li>{{ HTML::link('users/restapi', 'RestAPI') }}</li>
                            <li class="divider"></li>
                            <li>{{ HTML::link('#', 'Trash') }}</li>
                        </ul>
                    </li>
                @endif 
          </ul> 
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li>{{ HTML::link('users/logout', 'logout') }}</li>
            @endif
          </ul>
          </div>
        </div>
    </div>


    <div class="container">
    <div class="col-md-12">
       {{ $content }}
    </div>
    </div>
 

</body>
</html>
