
<div class="container">

<div class="jumbotron">
	<h2>Original</h2>
	<h3>{{$document->description}}</h3>
	<p>{{$document->content}}</p>
</div>

<h1>Create a Translation</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'translations/'.$document->id.'/store'))}} 

	<div class="form-group">
		{{ Form::label('LangId', 'LangId') }}
		{{ Form::text('language_id', Input::old('language_id'), array('class' => 'form-control')) }}
	<!--	{{ Form::label('Content', 'Content') }} -->
	<!--	{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}-->

	</div>

	{{ Form::submit('Create the Translation', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
