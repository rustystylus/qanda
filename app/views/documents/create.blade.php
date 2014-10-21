

<h1>Create a document</h1>
	<ul class="btn btn-default">
		<li><a href="{{ URL::to('documents') }}">View All Documents</a></li>
	</ul>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'documents')) }}

	{{ Form::hidden('user_id', $user->id, array('class' => 'form-control')) }}

	<div class="form-group">
		{{ Form::label('description', 'Description') }}
		{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('content', 'Content') }}
		{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the content', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

