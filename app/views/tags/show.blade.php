<!-- app/views/clients/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('clients') }}">Client Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('clients') }}">View All Clients</a></li>
		<li><a href="{{ URL::to('clients/create') }}">Create a Client</a>
	</ul>
</nav>

<h1>Showing {{ $client->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $client->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $client->email }}<br>
			<strong>Level:</strong> {{ $client->client_level }}
		</p>
	</div>

</div>
</body>
</html>