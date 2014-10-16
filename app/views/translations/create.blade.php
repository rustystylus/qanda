<!-- app/views/answers/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Create Answer</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('answers') }}">Answer Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('answers') }}">View All Answers</a></li>
		<li><a href="{{ URL::to('answers/create') }}">Create a Answer</a></li>
	</ul>
</nav>
<p>$question->title</p>
<h1>Create a Answer</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'answers')) }}

	<div class="form-group">
		{{ Form::label('Text', 'Text') }}
		{{ Form::text('text', Input::old('text'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Answer', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>