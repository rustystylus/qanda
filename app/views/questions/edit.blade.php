<!-- app/views/questions/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>edit question</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('questions') }}">Question Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('questions') }}">View All Questions</a></li>
		<li><a href="{{ URL::to('questions/create') }}">Create a Question</a>
	</ul>
</nav>

<h1>Edit {{ $question->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($question, array('route' => array('questions.update', $question->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('text', 'Text') }}
		{{ Form::text('text', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Question!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>