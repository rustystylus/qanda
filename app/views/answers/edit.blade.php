
<div class="container">


<h1>Edit {{ $answer->id }}</h1>
<div class="jumbotron">
	<h2>Original</h2>
	<h3>{{$answer->question->description}}</h3>
	<p>{{$answer->question->content}}</p>
</div>


<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($answer, array('route' => array('answers.update', $answer->id), 'method' => 'PUT')) }}

		{{ Form::hidden('question_id', Input::old($answer->question_id), array('class' => 'form-control')) }}

	<div class="form-group">
		{{ Form::label('Content', 'Content') }}
		{{ Form::textarea('content', Input::old($answer->content), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit the answer', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
