<!-- app/views/documents/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>edit document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('documents') }}">Question</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('documents') }}">View All Questions</a></li>
	</ul>
</nav>

<h1>Edit Document: {{ $document->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($document, array('route' => array('documents.update', $document->id), 'method' => 'PUT')) }}

	{{ Form::hidden('user_id', Input::old('user_id'), array('class' => 'form-control')) }}

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('content', 'Content') }}
		{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Document', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>