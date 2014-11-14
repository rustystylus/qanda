<div class="container">

<div class="row">
		<ul class="list-inline">
			<li>Question Id: {{ $question->id }}</li>
			<li>User Id: {{ $question->user_id }}</li>
			<li>
				Description: {{ $question->description }}
			</li>
			<li>
				Created: {{date("j M-Y", strtotime( $question->created_at)) }}
			</li>
			<li>
				Updated: {{date("j M-Y", strtotime( $question->updated_at)) }}
			</li>
		</ul>
</div>
</div>
<div class="jumbotron">
		<p>
			 {{ $question->content }}
		</p>
</div>

<div class="container rowspacer">

<table width="100%" class="display" id="questions" cellspacing="0">
            <thead>
                <tr>
            	<th>Id</th>
            	<th>question Id</th>
                <th>Content</th>
                <th>Updated</th>
                <th>Created</th>
                </tr>
            </thead>

		@foreach ($question->answers as $info)
		<tbody>
		    <tr>
					<td>
			    		{{$info->id;}}
					</td>
					<td>
			    		{{$info->question_id;}}
					</td>					
					<td>
			    		{{substr( $info->content, 0, 50)."...";}}
					</td>
					<td>
			    		{{date("j M-Y", strtotime($info->updated_at));}}
					</td>
					<td>
			    		{{date("j M-Y", strtotime($info->created_at));}}
					</td>
					<td>
						<a href="{{ URL::to('answers/'.$info->id.'/show') }}">
						<button type="button" class="btn btn-default">
							View
						</button>
						</a>
					</td>
					</tr>
		</tbody>
			@endforeach
			<tfoot></tfoot>
</table>

</div>
<div class="container">
	<a href="{{ URL::to('answers/'. $question->id.'/create' ) }}">
		<button type="button" class="btn btn-default">
				Add Answer
		</button>
	</a>
</div>
<div class="container">
	<p/>tag cloud</p>
		<ul class="list-inline">
            @foreach ($tags as $t)
            <li>
                 {{$t->text;}}
            </li>
            @endforeach
		</ul>
	<a href="{{ URL::to('tags/'. $question->id.'/create' ) }}">
		<button type="button" class="btn btn-default">
			Add Tag
		</button>
	</a>
</div>

