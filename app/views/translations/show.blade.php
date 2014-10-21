<!-- app/views/translations/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Show translation</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('translations') }}">Translation</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('translations') }}">View All Translations</a></li>
	</ul>
</nav>

<h1>Showing {{ $translation->id }}</h1>

	<div class="jumbotron text-center">
		<p>
			 {{ $translation->content }}<br>
		</p>
	</div>

</div>
</body>
</html>