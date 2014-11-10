<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>RustyStylus</title>
    <!-- Latest compiled and minified CSS -->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}
    <!-- Optional theme -->
    {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css')}}
    {{ HTML::script('js/jquery.js')}}

    <!-- Latest compiled and minified JavaScript -->
    {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}

    {{ HTML::style('css/main.css')}}
  </head>
 
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="nav navbar-header">		   
    		<a href="dashboard" class="brand">
    		  {{ HTML::image('logo.png', 'logo') }}
    		</a>	   
        </div>

        <div class="container">
        
          <ul class="nav navbar-nav">
                @if(!Auth::check())
                    <li>{{ HTML::link('users/register', 'Register') }}</li>  
                    <li>{{ HTML::link('users/login', 'Login') }}</li>  
                @else
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Apps <b class="caret"></b></a>
                        <ul class="dropdown-menu">
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
     <div class="container">
        <div class="col-md-4">
         <div class="container">
            @if(Session::has('message'))
                <p class="alert">{{ Session::get('message') }}</p>
            @endif
         </div>
        </div>

        <div class="col-md-4">
           {{ $content }}
        </div>

        <div class="col-md-4">
        </div>
    </div>
</body>
</html>
