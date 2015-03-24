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
        {{ HTML::style('//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css')}}
    {{ HTML::script('js/jquery.js')}}
    {{ HTML::script('js/jquery.dataTables.min.js')}}
    <!-- Latest compiled and minified JavaScript -->
    {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}
    {{ HTML::script('//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js')}}

    {{ HTML::style('css/main.css')}}
</head>
 
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="nav navbar-header">
                <a href="dashboard" class="navbar-brand">
                  {{ HTML::image('logo.png', 'logo') }}
                </a>
            </div>

		@include('includes.applist_or_login_dropdown_menu')

         
          <ul class="nav navbar-nav">
              <li>{{ HTML::link('questions', 'Questions') }}</li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
                <li>{{ HTML::link('users/logout', 'logout') }}</li>
            @endif
          </ul>
    </div>

    <div class="container">
    <div class="col-md-12">
       {{ $content }}
    </div>
    </div>

</body>
</html>
