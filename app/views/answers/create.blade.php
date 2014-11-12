
<div class="container">

<div class="jumbotron">
	<p>Q</p>
	<p>{{$question->content}}</p>
</div>

<h1>Create a Answer</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'answers/'.$question->id.'/store'))}} 

	<div class="form-group">
		{{ Form::label('Content', 'Content') }}
		{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}

	</div>

	{{ Form::submit('Create the Answer', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
