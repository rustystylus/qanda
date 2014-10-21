<div class="container">

<div class="row">
		<ul class="nav nav-sidebar">
			<li>Document Id: {{ $document->id }}</li>
			<li>User Id: {{ $document->user_id }}</li>
			<li>
				Description: {{ $document->description }}
			</li>
			<li>
				Created: {{ $document->created_at }}
			</li>
			<li>
				Updated: {{ $document->updated_at }}
			</li>
		</ul>
</div>
</div>
<div class="jumbotron">
		<p>
			 {{ $document->content }}
		</p>
</div>
<h2>Translations of this document</h2>	
<table width="100%" class="display" id="translations" cellspacing="0">
        <thead>
            <tr>
            	<th>Id</th>
            	<th>Document Id</th>
                <th>Language</th>
                <th>Content</th>
                <th>Updated</th>
                <th>Created</th>
            </tr>
        </thead>
        <tfoot>
        </tfoot>
 
        <tbody>
			@foreach ($document->translations as $info)
				<tr>
					<td>
			    		{{$info->id;}}
					</td>
					<td>
			    		{{$info->document_id;}}
					</td>					
					<td>
			    		{{$info->language_id;}}
					</td>
					<td>
			    		{{substr( $info->content, 0, 50)."...";}}
					</td>
					<td>
			    		{{date("j-n-Y", strtotime($info->updated_at));}}
					</td>
					<td>
			    		{{date("j-n-Y", strtotime($info->created_at));}}
					</td>
					<td>
						<a href="{{ URL::to('translations/'.$info->id.'/show') }}">
						<button type="button" class="btn btn-default">
							View
						</button>
						</a>
					</td>
				</tr>
			@endforeach

		</tbody>
</table>
<div class="container">
	<a href="{{ URL::to('translations/'. $document->id.'/create' ) }}">
		<button type="button" class="btn btn-default">
				Add Translation
		</button>
	</a>
</div>
<script>
    $(document).ready(function() {
        $('#translations').dataTable();
    } );

</script>
