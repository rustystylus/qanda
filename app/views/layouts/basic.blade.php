<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Laravel xampp</title>
    
    {{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css') }} 
    
    {{ HTML::script('js/jquery.js')}}
    {{ HTML::script('js/jquery.dataTables.min.js')}}
    {{ HTML::style('css/jquery.dataTables.css') }}
    {{ HTML::style('css/main.css')}}
  </head>
 
<body>
 
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="nav navbar-header">

            </div>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
                @if(!Auth::check())
                    <li>{{ HTML::link('users/register', 'Register') }}</li>  
                    <li>{{ HTML::link('users/login', 'Login') }}</li>  
                @else
                    <li>{{ HTML::link('users/logout', 'logout') }}</li>
                @endif 
          </ul> 
        </div>
    </div>



    <div class="col-md-12">
       {{ $content }}
    </div>
 

</body>
</html>