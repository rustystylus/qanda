<!-- app/views/questions/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>show</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('questions') }}">Question Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('questions') }}">View All Questions</a></li>
		<li><a href="{{ URL::to('questions/create') }}">Create a Question</a>
	</ul>
</nav>

<h1>Showing {{ $question->title }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $question->title }}</h2>
		<p>
			<strong>Question</strong> {{ $question->text }}<br>
			<strong>Answer</strong> {{ $question->id }}
		</p>
	</div>
	
	<a href="{{ URL::action('AnswersController@create', [$question->id] ) }}">
		<button type="button" class="btn btn-default">
				Add Answer
		</button>
	</a>
</div>
</body>
</html>