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
		<a class="navbar-brand" href="{{ URL::to('documents') }}">Question Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('documents') }}">View All Questions</a></li>
		<li><a href="{{ URL::to('documents/create') }}">Create a Question</a>
	</ul>
</nav>

<h1>Edit {{ $document->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($document, array('route' => array('documents.update', $document->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('content', 'Content') }}
		{{ Form::text('content', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Document', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>