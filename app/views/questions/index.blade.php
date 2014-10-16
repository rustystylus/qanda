
<h1>Questions</h1>

		<a href="{{ URL::to('questions/create') }}">
			<button type="button" class="btn btn-default">
				Add Question
			</button>
		</a>	

<table width="100%" class="display" id="questions" cellspacing="0">
        <thead>
            <tr>
            	
                <th>Title</th>
                <th>Question</th>
                <th>
						From
				</th>
				<th>
						To
				</td> 
				<th>
						
				</th>
           
            </tr>
        </thead>
 
        <tfoot>
            <tr>            	
                <th>Title</th>
                <th>Question</th>
                <th>
						From
				</th>
				<th>
						To
				</td> 
				<th>
						
				</th>
            </tr>
        </tfoot>
 
        <tbody>
			@foreach ($questionInfo as $info)
				<tr data-id={{$info->id}}>					
					<td>
						<ul>
							<li>
			    				{{$info->title}}
							</li>
							<li>
			    				{{$info->text}}
			    			</li>
			    		</ul>
					</td>
					<td>
						From
					</td>
					<td>
						To
					</td>
					<td>
						<a href="{{ URL::action('QuestionsController@show', [$info->id] ) }}">
							<button type="button" class="btn btn-default">
								View
							</button>
						</a>
			    		
					</td>
					<td>
						<a href="{{ URL::action('QuestionsController@quote', [$info->id] ) }}">
							<button type="button" class="btn btn-default">
								Quote
							</button>
						</a>
			    		
					</td>
				</tr>
			@endforeach
		</tbody>
</table>
<script>
    $(document).ready(function() {
        $('#questions').dataTable();
    } );
</script>