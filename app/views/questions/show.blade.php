<div class="container">

<div class="row">
		<ul class="nav nav-sidebar">
			<li>question Id: {{ $question->id }}</li>
			<li>User Id: {{ $question->user_id }}</li>
			<li>
				Description: {{ $question->description }}
			</li>
			<li>
				Created: {{ $question->created_at }}
			</li>
			<li>
				Updated: {{ $question->updated_at }}
			</li>
		</ul>
</div>
</div>
<div class="jumbotron">
		<p>
			 {{ $question->content }}
		</p>
</div>
<h2>Answers for the question</h2>	
<table width="100%" class="display" id="answers" cellspacing="0">
        <thead>
            <tr>
            	<th>Id</th>
            	<th>question Id</th>
                <th>Content</th>
                <th>Updated</th>
                <th>Created</th>
            </tr>
        </thead>
        <tfoot>
        </tfoot>
 
        <tbody>
		@foreach ($question->answers as $info)
		<tr>
					<td>
			    		{{$info->id;}}
					</td>
					<td>
			    		{{$info->question_id;}}
					</td>					
					<td>
			    		{{substr( $info->content, 0, 50)."...";}}
					</td>
					<td>
			    		{{date("j-n-Y", strtotime($info->updated_at));}}
					</td>
					<td>
			    		{{date("j-n-Y", strtotime($info->created_at));}}
					</td>
					<td>
						<a href="{{ URL::to('answers/'.$info->id.'/show') }}">
						<button type="button" class="btn btn-default">
							View
						</button>
						</a>
					</td>
		</tr>
			@endforeach

		</tbody>
</table>
<div class="container">
	<a href="{{ URL::to('answers/'. $question->id.'/create' ) }}">
		<button type="button" class="btn btn-default">
				Add Answer
		</button>
	</a>
</div>
<script>
    $(question).ready(function() {
        $('#translations').dataTable();
    } );

</script>
