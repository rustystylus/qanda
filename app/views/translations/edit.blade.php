<!-- app/views/translations/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Edit Translation</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('users/dashboard') }}">Home</a>
		<a class="navbar-brand" href="{{ URL::to('translations') }}">Translations</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('translations') }}">View All Translations</a></li>
	</ul>
</nav>

<h1>Edit {{ $translation->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($translation, array('route' => array('translations.update', $translation->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('Doc Id', 'Doc Id') }}
		{{ Form::text('document_id', Input::old($translation->document_id), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('Lang Id', 'Lang Id') }}
		{{ Form::text('language_id', Input::old($translation->language_id), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('Content', 'Content') }}
		{{ Form::text('content', Input::old($translation->content), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Translation', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>