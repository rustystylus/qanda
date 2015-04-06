<?php
class TagsController extends BaseController {
    protected $layout = "layouts.basic";

	public $restful=true;

	public function __construct() 
	{
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth', array('only'=>array('getIndex')));
	}

	public function index() 
	{
		$tagInfo = Tag::all();
  	  	$this->layout->content = View::make('tags.index')->with('tagInfo',$tagInfo);
	}

		/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
        if (! Auth::check()) {
            return Redirect::to('users/login');
        }
        // get the question
		$question = Question::find($id);
        $tags = Question::find($id)->tags;
		$this->layout->content = View::make('tags.create')
					->with('question_id', $question->id)
					->with('user', Auth::user())
                    ->with('tags', $tags);
        //$this->layout->content = View::make('tags.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'text'       => 'required',
            		'question_id'=>'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('tags/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$tag = new Tag;
			$tag->text = Input::get('text');
			$tag->save();

            $tag->questions()->attach(Input::get('question_id')); //this executes the insert-query
				/*$question_tag = new QuestionTag;
				$question_tag->question_id = $id;
				$question_tag->tag_id = $tag->id;
				$question_tag->save();*/

			// redirect
			Session::flash('message', 'Successfully created tag!');


			return Redirect::to('tags');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the tag
		$tag = Tag::find($id);

		// show the view and pass the tag to it
		return View::make('tags.show')
			->with('tag', $tag);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the tag
		$tag = Tag::find($id);

		// show the edit form and pass the tag
		return View::make('tags.edit')
			->with('tag', $tag);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'text'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('tags/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$tag = Tag::find($id);
			$tag->text  = Input::get('text');
			$tag->save();

			// redirect
			Session::flash('message', 'Successfully updated tag!');
			return Redirect::to('tags');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$tag = Tag::find($id);
		$tag->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the tag!');
		return Redirect::to('tags');
	}

}
