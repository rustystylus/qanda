
<div class="container">

<div class="jumbotron">
	<h2>Original</h2>
	<h3>{{$question->description}}</h3>
	<p>{{$question->content}}</p>
</div>

<h1>Create a Answer</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'answers/'.$question->id.'/store'))}} 

	<div class="form-group">
		{{ Form::label('LangId', 'LangId') }}
	<!--	{{ Form::label('Content', 'Content') }} -->
	<!--	{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}-->

	</div>

	{{ Form::submit('Create the Translation', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
