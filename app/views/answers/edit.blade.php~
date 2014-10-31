
<div class="container">


<h1>Edit {{ $translation->id }}</h1>
<div class="jumbotron">
	<h2>Original</h2>
	<h3>{{$translation->document->description}}</h3>
	<p>{{$translation->document->content}}</p>
</div>


<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($translation, array('route' => array('translations.update', $translation->id), 'method' => 'PUT')) }}

		{{ Form::hidden('document_id', Input::old($translation->document_id), array('class' => 'form-control')) }}

		{{ Form::hidden('language_id', Input::old($translation->language_id), array('class' => 'form-control')) }}

	<div class="form-group">
		{{ Form::label('Content', 'Content') }}
		{{ Form::textarea('content', Input::old($translation->content), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the Translation', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
