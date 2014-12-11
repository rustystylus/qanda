
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
                <th>Priority</th>
                <th>Up</th>
                <th>Down</th>
		        <th>Todo</th>
                <th>Todo</th>
                <th>Updated</th>
                <th>Reminder</th>
                <th>Done</th>   
            </tr>
        </thead>
        <tfoot>
            <tr>            	
                <th></th>
                <th></th>
                <th></th>
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
					<span class="badge alert-info">
				        {{$info->position}}
					</span>
				    </td>
				    <td><a href="{{ URL::action('TodosController@priorityUp', [$info->id] ) }}"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a></td>
				    <td><a href="{{ URL::action('TodosController@priorityDown', [$info->id] ) }}"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a></td>
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
			    		<a href="#">
							Set	Reminder
    					</a>
					</td>
					<td>@if ($info->position > 0)
			    		    <a href="{{ URL::action('TodosController@done', [$info->id] ) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
					    @else
					        <a href="{{ URL::action('TodosController@undo', [$info->id] ) }}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
					    @endif
					</td>
				</tr>
			@endforeach
		</tbody>
</table>
</div>
<script>
    $(document).ready(function() {
        $('#todos').dataTable({
        	"order": [[ 0, "desc" ]]
        });
    } );
</script>
