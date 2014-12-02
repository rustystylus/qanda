
<h1>Todos</h1>

	<a href="{{ URL::to('todos/create') }}">
		<button type="button" class="btn btn-default">
			Add Todo
		</button>
	</a>	

<div class="rowspacer">
<table width="100%" class="display" id="todos" cellspacing="0">
        <thead>
            <tr>            	
                <th>Position</th>
		<th>Todo</th>
                <th>Todo</th>
                <th>Updated</th>
                <th>Created</th>   
            </tr>
        </thead>
        <tfoot>
            <tr>            	
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
			@foreach ($todoInfo as $info)
				<tr data-id={{$info->id}}>	
				    <td>
				        {{$info->position}}
				    </td>
					<td>
		    			{{$info->content}}
					</td>
					<td>
    					<a href="{{ URL::action('TodosController@show', [$info->id] ) }}">
								View
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
        $('#todos').dataTable();
    } );
</script>
