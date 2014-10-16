
<h1>Dashboard</h1>
 
<p>Welcome to your Dashboard.</p>

<ul class="list-group">
	<li class="list-group-item">
		<a href="{{ URL::to('clients') }}">
			<button type="button" class="btn btn-default">
				View All Clients
			</button>
		</a>
	</li>
	<li class="list-group-item">
		<a href="{{ URL::to('questions') }}">
			<button type="button" class="btn btn-default">
				View All Questions
			</button>
		</a>
	
	</li>
	<li class="list-group-item">
		<a href="{{ URL::to('postings') }}">
			<button type="button" class="btn btn-default">
				View All Postings
			</button>
		</a>
	
	</li>
</ul>