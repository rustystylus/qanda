<!-- app/views/documents/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>show</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="{{ URL::to('documents') }}">Document Alert</a>
	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('documents') }}">View All Documents</a></li>
		<li><a href="{{ URL::to('documents/create') }}">Create a Document</a>
	</ul>
</nav>

	<div class="jumbotron text-center">
		<ul>
			<li>Document Id: {{ $document->id }}</li>
			<li>
				Description: {{ $document->description }}
			</li>
		</ul>
	</div>
	<div class="container">
		<p>
			 {{ $document->content }}
		</p>
	</div>
	
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
            <tr>
            	<th>Id</th>
            	<th>Document Id</th>
                <th>Language</th>
                <th>Content</th>
                <th>Updated</th>
                <th>Created</th>                
            </tr>
        </tfoot>
 
        <tbody>
			@foreach ($document->translations as $info)
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
			    		{{$info->content}}
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

	<a href="{{ URL::action('TranslationsController@create', [$document->id] ) }}">
		<button type="button" class="btn btn-default">
				Add Translation
		</button>
	</a>
</div>
</body>
</html>