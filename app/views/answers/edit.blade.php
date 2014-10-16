<!-- app/views/postings/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Edit Posting</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('postings') }}">Posting Alert</a>
		<a class="navbar-brand" href="{{ URL::to('dashboard') }}">Home</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('postings') }}">View All Postings</a></li>
		<li><a href="{{ URL::to('postings/create') }}">Create a Posting</a>
	</ul>
</nav>

<h1>Edit {{ $posting->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($posting, array('route' => array('postings.update', $posting->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('Date', 'Date') }}
		{{ Form::text('Date', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Jnl', 'Jnl') }}
		{{ Form::text('Jnl', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('Comment', 'Comment') }}
		{{ Form::text('Comment', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('Value', 'Value') }}
		{{ Form::text('Value', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Dr', 'Dr') }}
		{{ Form::text('Dr', null, array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Cr', 'Cr') }}
		{{ Form::text('Cr', null, array('class' => 'form-control')) }}
	</div>
	{{ Form::submit('Edit the Posting', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>