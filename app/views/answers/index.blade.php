
<h1>Postings</h1>


<table width="100%" class="display" id="postingscreate" cellspacing="0">
        <thead>
            <tr>
            	<th> </th>
            	<th>Date</th>
                <th>Journal</th>
                <th>Comment</th>
                <th>Value</th>
                <th>Dr</th>
                <th>Cr</th>
            </tr>
        </thead>
        <tbody>
            <tr>
				{{ Form::open(array('url' => 'postings')) }}
				<td> </td>
				<td>
					{{Form::input('Date', 'Date', null, array('class' => 'form-control', 'placeholder' => 'yyyy-mm-dd'))}}
				</td> 

				<td>
					{{ Form::text('Jnl', Input::old('Jnl'), array('class' => 'form-control')) }}
				</td>

				<td>
					{{ Form::text('Comment', Input::old('Comment'), array('class' => 'form-control')) }}
				</td>
				<td>
					{{ Form::text('Value', Input::old('Value'), array('class' => 'form-control')) }}
				</td>
				<td>
					{{ Form::text('Dr', Input::old('Dr'), array('class' => 'form-control')) }}
				</td>

				<td>
					{{ Form::text('Cr', Input::old('Cr'), array('class' => 'form-control')) }}
				</td>
				<td>
					{{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
				</td>
				{{ Form::close() }}
			</tr>
        </tbody>
</table>

<table width="100%" class="display" id="postings" cellspacing="0">
        <thead>
            <tr>
            	<th>ID</th>
            	<th>Date</th>
                <th>Journal</th>
                <th>Comment</th>
                <th>Value</th>
                <th>Dr</th>
                <th>Cr</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
            	<th>ID</th>
            	<th>Date</th>
                <th>Journal</th>
                <th>Comment</th>
                <th>Value</th>
                <th>Dr</th>
                <th>Cr</th>                
            </tr>
        </tfoot>
 
        <tbody>

			@foreach ($postingInfo as $info)
				<tr>
					<td>
			    		{{$info->PostID}}
					</td>
					<td>
			    		{{date("j-n-Y", strtotime($info->Date));}}
					</td>					
					<td>
			    		{{$info->Jnl}}
					</td>
					<td>
			    		{{$info->Comment}}
					</td>
					<td>
			    		{{$info->Value}}
					</td>
					<td>
			    		{{$info->Dr}}
					</td>
					<td>
			    		{{$info->Cr}}
					</td>
					<td>
						<a href="{{ URL::to('postings/'.$info->PostID.'/edit') }}">
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
        $('#postings').dataTable();
        $( "#datepicker" ).datepicker();
    } );

</script>
