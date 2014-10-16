<!-- app/views/questions/quote.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Tags</title>
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

<h1>Quote {{ $question->title }}</h1>

</div>
</body>
</html>