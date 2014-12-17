<div class="row">
	{{ HTML::link('questions', 'Question List') }}
</div>

<h1>Edit question: {{ $question->id }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($question, array('route' => array('questions.update', $question->id), 'method' => 'PUT')) }}

	{{ Form::hidden('user_id', Input::old('user_id'), array('class' => 'form-control')) }}

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('content', 'Content') }}
		{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the question', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}



