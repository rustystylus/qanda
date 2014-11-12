
<h1>Tags</h1>

		<a href="{{ URL::to('tags/0/create') }}">
			<button type="button" class="btn btn-default">
				Add Tag
			</button>
		</a>	

<table width="100%" class="display" id="tags" cellspacing="0">
        <thead>
            <tr>
            	<th>ID</th>
                <th>Name</th>

            </tr>
        </thead>
 
        <tfoot>
            <tr>
            	<th>ID</th>
                <th>Name</th>

            </tr>
        </tfoot>
 
        <tbody>
			@foreach ($tagInfo as $info)
				<tr>
					<td>
			    		{{$info->id}}
					</td>
					<td>
			    		{{$info->text}}
					</td>

				</tr>
			@endforeach
		</tbody>
</table>
<script>
    $(document).ready(function() {
        $('#tags').dataTable();
    } );
</script>