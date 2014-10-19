<!-- app/views/translations/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Create Translation</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('translations') }}">Translation Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('translations') }}">View All Translations</a></li>
	</ul>
</nav>
<p>{{$document->description}}</p>
<h2>Original</h2>
<p>{{$document->content}}</p>
<h1>Create a Translation</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'translations/'.$document->id.'/store'))}} 

	<div class="form-group">
		{{ Form::label('LangId', 'LangId') }}
		{{ Form::text('language_id', Input::old('language_id'), array('class' => 'form-control')) }}
		{{ Form::label('Content', 'Content') }}
		{{ Form::text('content', Input::old('content'), array('class' => 'form-control')) }}

	</div>

	{{ Form::submit('Create the Translation', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>