<!-- app/views/todos/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>edit todo</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('todos') }}">Todo</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('todos') }}">View All Todos</a></li>
	</ul>
</nav>

<h1>Edit todo: {{ $todo->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($todo, array('route' => array('todos.update', $todo->id), 'method' => 'PUT')) }}

	{{ Form::hidden('user_id', Input::old('user_id'), array('class' => 'form-control')) }}

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('content', 'Content') }}
		{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the todo', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>
