
<div class="row">
    <h1>Showing {{ $answer->id }}</h1>
    Vote
    <a href="{{ URL::action('AnswersController@voteUp', [$answer->id] ) }}"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
     
    <a href="{{ URL::action('AnswersController@voteDown', [$answer->id] ) }}"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
</div>

<div class="row">
	<div class="jumbotron text-center">
		<p>
			 {{ $answer->content }}<br>
		</p>
	</div>
</div>
