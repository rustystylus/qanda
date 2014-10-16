<!-- app/views/tags/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Create <?php echo 'Tag';?></title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('tags') }}">Tags</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('tags') }}">View All Tags</a></li>
		<li><a href="{{ URL::to('tags/create') }}">Create a Tag</a>
	</ul>
</nav>

<h1>Create a Tag</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'tags')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Tag!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>