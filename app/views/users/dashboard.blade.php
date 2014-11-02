
<h1>Dashboard</h1>
<ul class="list-group">
	<li class="list-group-item">
		<a href="{{ URL::to('questions') }}">
			<button type="button" class="btn btn-default">
				View All Questions
			</button>
		</a>	
	</li>
	<li class="list-group-item">
		<a href="{{ URL::to('answers') }}">
			<button type="button" class="btn btn-default">
				View All Answers
			</button>
		</a>	
	</li>
	<li class="list-group-item">
    		<a href="{{ URL::to('tags') }}">
    			<button type="button" class="btn btn-default">
    				View All Tags
    			</button>
    		</a>
    </li>
</ul>