

<h1>Create a question</h1>
	<ul class="btn btn-default">
		<li><a href="{{ URL::to('questions') }}">View All Questions</a></li>
		<li><a href="{{ URL::to('answers/1/create') }}">Create an answer for question 1</a></li>	
	</ul>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'questions')) }}

	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('question', 'Question') }}
		{{ Form::text('text', Input::old('text'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create the Question', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

