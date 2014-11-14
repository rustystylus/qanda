
<h1>Questions</h1>
<div class="container">
	<a href="{{ URL::to('questions/create') }}">
		<button type="button" class="btn btn-default">
			Add Question
		</button>
	</a>	
</div>
<div class="container rowspacer">
<table width="100%" class="display" id="questions" cellspacing="0">
        <thead>
            <tr>            	
                <th>Id</th>
                <th>Description</th>
                <th>Question</th> 
                <th>Updated</th>
                <th>Created</th>   
            </tr>
        </thead>
        <tfoot>
            <tr>            	
                <th>Id</th>
                <th>Description</th>
                <th>Question</th>
                <th>Updated</th>
                <th>Created</th>
            </tr>
        </tfoot>
 
        <tbody>
			@foreach ($questionInfo as $info)
				<tr data-id={{$info->id}}>	
					<td>
						{{$info->id}}
					</td>				
					<td>
		    			{{$info->description}}
					</td>
					<td>
						<a href="{{ URL::action('QuestionsController@show', [$info->id] ) }}">
							<button type="button" class="btn btn-default">
								View Question
							</button>
						</a> 		
					</td>
					<td>
			    		{{date("j M-Y", strtotime($info->updated_at));}}
					</td>
					<td>
			    		{{date("j M-Y", strtotime($info->created_at));}}
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
