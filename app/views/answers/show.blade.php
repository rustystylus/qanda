
<div class="row">
    <h1>Showing {{ $answer->id }}</h1>
    Vote
    <a href="#">Up {{ $answer->upvotes }}<span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
    <a href="#">Down {{ $answer->downvotes }}<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
</div>

<div class="row">
	<div class="jumbotron text-center">
		<p>
			 {{ $answer->content }}<br>
		</p>
	</div>
</div>
