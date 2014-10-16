
<h1>Clients</h1>

		<a href="{{ URL::to('clients/create') }}">
			<button type="button" class="btn btn-default">
				Add Client
			</button>
		</a>	

<table width="100%" class="display" id="clients" cellspacing="0">
        <thead>
            <tr>
            	<th>ID</th>
                <th>Name</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>Post Code</th>
                <th>DOB</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
            	<th>ID</th>
                <th>Name</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>Post Code</th>
                <th>DOB</th>
            </tr>
        </tfoot>
 
        <tbody>
			@foreach ($clientInfo as $info)
				<tr>
					<td>
			    		{{$info->CLIENTID}}
					</td>
					<td>
			    		{{$info->NAME}}
					</td>
					<td>
			    		{{$info->ADDRESS1}}
					</td>
					<td>
			    		{{$info->ADDRESS2}}
					</td>
					<td>
			    		{{$info->POSTCODE}}
					</td>
					<td>
			    		{{$info->DOB}}
					</td>
				</tr>
			@endforeach
		</tbody>
</table>
<script>
    $(document).ready(function() {
        $('#clients').dataTable();
    } );
</script>