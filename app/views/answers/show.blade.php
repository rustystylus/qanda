<!-- app/views/postings/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('postings') }}">Posting Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('postings') }}">View All Postings</a></li>
		<li><a href="{{ URL::to('postings/create') }}">Create a Posting</a>
	</ul>
</nav>

<h1>Showing {{ $posting->name }}</h1>

	<div class="jumbotron text-center">
		<h2>{{ $posting->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $posting->email }}<br>
			<strong>Level:</strong> {{ $posting->posting_level }}
		</p>
	</div>

</div>
</body>
</html>