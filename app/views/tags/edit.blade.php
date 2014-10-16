<!-- app/views/clients/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Edit Client</title>
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

<h1>Edit {{ $client->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($client, array('route' => array('clients.update', $client->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Email') }}
		{{ Form::email('email', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('client_level', 'Client Level') }}
		{{ Form::select('client_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Client!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>