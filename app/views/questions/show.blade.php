<div class="container">

<div class="row">
		<ul class="list-inline">
			<li>question Id: {{ $question->id }}</li>
			<li>User Id: {{ $question->user_id }}</li>
			<li>
				Description: {{ $question->description }}
			</li>
			<li>
				Created: {{ $question->created_at }}
			</li>
			<li>
				Updated: {{ $question->updated_at }}
			</li>
		</ul>
</div>
</div>
<div class="jumbotron">
		<p>
			 {{ $question->content }}
		</p>
</div>

<dl width="100%"  class="list-inline" id="answers">
            <li>
                <ul class="list-inline">
            	<li>Id</li>
            	<li>question Id</li>
                <li>Content</li>
                <li>Updated</li>
                <li>Created</li>
                </ul>
            </li>


		@foreach ($question->answers as $info)
		<ul class="list-inline">
					<li>
			    		{{$info->id;}}
					</li>
					<li>
			    		{{$info->question_id;}}
					</li>					
					<li>
			    		{{substr( $info->content, 0, 50)."...";}}
					</li>
					<li>
			    		{{date("j-n-Y", strtotime($info->updated_at));}}
					</li>
					<li>
			    		{{date("j-n-Y", strtotime($info->created_at));}}
					</li>
					<li>
						<a href="{{ URL::to('answers/'.$info->id.'/show') }}">
						<button type="button" class="btn btn-default">
							View
						</button>
						</a>
					</li>
		</ul>
			@endforeach

		
</dl>
<div class="container">
	<a href="{{ URL::to('answers/'. $question->id.'/create' ) }}">
		<button type="button" class="btn btn-default">
				Add Answer
		</button>
	</a>
</div>
<script>
    $(question).ready(function() {
        
    } );

</script>
