
<h1>Documents</h1>

		<a href="{{ URL::to('documents/create') }}">
			<button type="button" class="btn btn-default">
				Add Document
			</button>
		</a>	

<table width="100%" class="display" id="documents" cellspacing="0">
        <thead>
            <tr>            	
                <th>Id</th>
                <th>Description</th>
                <th>Document</th> 
                <th>Updated</th>
                <th>Created</th>   
            </tr>
        </thead>
        <tfoot>
            <tr>            	
                <th>Id</th>
                <th>Description</th>
                <th>Document</th>
                <th>Updated</th>
                <th>Created</th>
            </tr>
        </tfoot>
 
        <tbody>
			@foreach ($documentInfo as $info)
				<tr data-id={{$info->id}}>	
					<td>
						{{$info->id}}
					</td>				
					<td>
		    			{{$info->description}}
					</td>
					<td>
						<a href="{{ URL::action('DocumentsController@show', [$info->id] ) }}">
							<button type="button" class="btn btn-default">
								View
							</button>
						</a> 		
					</td>
					<td>
			    		{{date("j-n-Y H:m", strtotime($info->updated_at));}}
					</td>
					<td>
			    		{{date("j-n-Y H:m", strtotime($info->created_at));}}
					</td>
				</tr>
			@endforeach
		</tbody>
</table>
<script>
    $(document).ready(function() {
        $('#documents').dataTable();
    } );
</script>