

<div class="row">
		<ul class="list-inline">
			<li>Todo Id: {{ $todo->id }}</li>
			<li>User Id: {{ $todo->user_id }}</li>
			<li>Todo Position: {{ $todo->position }}</li>
			<li>
				Description: {{ $todo->description }}
			</li>
			<li>
				Created: {{date("j M-Y", strtotime( $todo->created_at)) }}
			</li>
			<li>
				Updated: {{date("j M-Y", strtotime( $todo->updated_at)) }}
			</li>
		</ul>
</div>
</div>
<div class="jumbotron">
		<p>
			 {{ $todo->content }}
		</p>
</div>



