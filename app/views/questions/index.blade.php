
<h1>Questions</h1>

	<a href="{{ URL::to('questions/create') }}">
		<button type="button" class="btn btn-default">
			Add Question
		</button>
	</a>	

<div class="rowspacer">
<table width="100%" class="display" id="questions" cellspacing="0">
        <thead>
            <tr>            	
                <th>Question</th>
                <th>View</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tfoot>
            <tr>            	
                <th>Question</th>
                <th>View</th>
                <th>Updated</th>
            </tr>
        </tfoot>
 
        <tbody>
			@foreach ($questionInfo as $info)
				<tr data-id={{$info->id}}>					
					<td>
		    			{{$info->content}}
					</td>
					<td>
 						<a href="{{ URL::action('QuestionsController@show', [$info->id] ) }}">
							<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						</a>
					</td>
					<td>
			    		{{date("j M-Y", strtotime($info->updated_at));}}
					</td>
				</tr>
			@endforeach
		</tbody>
</table>
</div>
<script>
    $(document).ready(function() {
        $('#questions').dataTable();
    } );
</script>
