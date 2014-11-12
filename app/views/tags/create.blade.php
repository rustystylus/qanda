<!-- app/views/tags/create.blade.php -->

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'tags')) }}
	    {{ Form::hidden('question_id', $question_id, array('class' => 'form-control')) }}

	<div class="form-group">
		{{ Form::label('tag', 'Tag') }}
		{{ Form::text('text', Input::old('text'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create Tag', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

