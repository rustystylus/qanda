
<h1>Dashboard</h1>
 
<p>Welcome to your Dashboard.</p>

<ul class="list-group">
	<li class="list-group-item">
		<a href="{{ URL::to('documents') }}">
			<button type="button" class="btn btn-default">
				View All Documents
			</button>
		</a>	
	</li>
	<li class="list-group-item">
		<a href="{{ URL::to('translations') }}">
			<button type="button" class="btn btn-default">
				View All Translations
			</button>
		</a>
	
	</li>
</ul>