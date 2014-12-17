<!-- app/views/todos/edit.blade.php -->
<div class="row">
	{{ HTML::link('todos', 'Todo List') }}
</div>

<!-- if there are creation errors, they will show here -->
<div class="row">
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

