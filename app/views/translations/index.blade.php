
<h1>Translations</h1>

<table width="100%" class="display" id="translations" cellspacing="0">
        <thead>
            <tr>
            	<th>Id</th>
            	<th>Document Id</th>
                <th>Language</th>
                <th>Comment</th>
                <th>Updated</th>
                <th>Created</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
            	<th>Id</th>
            	<th>Document Id</th>
                <th>Language</th>
                <th>Comment</th>
                <th>Updated</th>
                <th>Created</th>                
            </tr>
        </tfoot>
 
        <tbody>
			@foreach ($translationInfo as $info)
				<tr>
					<td>
			    		{{$info->id}}
					</td>
					<td>
			    		{{$info->document_id}}
					</td>					
					<td>
			    		{{$info->language_id}}
					</td>
					<td>
			    		{{$info->Comment}}
					</td>
					<td>
			    		{{date("j-n-Y", strtotime($info->updated_at));}}
					</td>
					<td>
			    		{{date("j-n-Y", strtotime($info->created_at));}}
					</td>
					<td>
						<a href="{{ URL::to('translations/'.$info->id.'/edit') }}">
						<button type="button" class="btn btn-default">
							Edit
						</button>
						</a>
					</td>
				</tr>
			@endforeach

		</tbody>
</table>

<script>
    $(document).ready(function() {
        $('#translations').dataTable();
        $( "#datepicker" ).datepicker();
    } );

</script>
