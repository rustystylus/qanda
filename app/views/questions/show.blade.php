<div class="row">
			{{ HTML::link('questions', 'Question List') }}
</div>

<div class="row">
		<ul class="list-inline">
			<li>User Id: {{ $question->user_id }}</li>
			<li>
				Created: {{date("j M-Y", strtotime( $question->created_at)) }}
			</li>
			<li>
				Updated: {{date("j M-Y", strtotime( $question->updated_at)) }}
			</li>
		</ul>
</div>

<div class="row">
    <div class="jumbotron">
            <p>
                 {{ $question->content }}
            </p>
    </div>
</div>

<div class="rowspacer">
<h2>Answers</h2>
<table width="100%" class="display" id="questions" cellspacing="0">
            <thead>
                <tr>
                <th>Answer</th>
                <th>Updated</th>
		        <th>Votes</th>
                </tr>
            </thead>

		@foreach ($question->answers as $info)
		<tbody>
		    <tr>
				
					<td>
			    		{{substr( $info->content, 0, 50)."...";}}
					</td>
					<td>
			    		{{date("j M-Y", strtotime($info->updated_at));}}
					</td>
					<td>
			    		up|down
					</td>
					<td>
						<a href="{{ URL::to('answers/'.$info->id.'/show') }}">
						<button type="button" class="btn btn-default">
							View Answer
						</button>
						</a>
					</td>
			</tr>
		</tbody>
			@endforeach
			<tfoot></tfoot>
</table>


	<a href="{{ URL::to('answers/'. $question->id.'/create' ) }}">
		<button type="button" class="btn btn-default">
				Add Answer
		</button>
	</a>

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


