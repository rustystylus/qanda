

<div class="rowspacer">
<table width="100%" class="display" id="rmexcel" cellspacing="0">
        <thead>
            <tr>            	
                <th>Id</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Part Number</th>
                <th>Description</th>
            </tr>
        </thead>
        <tfoot>
            <tr>            	
                <th>Id</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Part Number</th>
                <th>Description</th>
            </tr>
        </tfoot>
        <tbody>
			@foreach ($RmexcelList as $info)
				<tr data-id={{$info->id}}>	
					<td>
						{{$info->id}}
					</td>
                    <td>
                        {{$info->category}}
                    </td>                    <td>
                        {{$info->sub_category}}
                    </td>                    <td>
                        {{$info->part_number}}
                    </td>
					<td>
		    			{{$info->description}}
					</td>
				</tr>
			@endforeach
		</tbody>
</table>
</div>
<script>
    $(document).ready(function() {
        $('#rmexcel').dataTable();
    } );
</script>
