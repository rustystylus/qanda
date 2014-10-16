<?php
class QuestionsController extends BaseController {
    protected $layout = "layouts.basic";

	public $restful=true;

	public function __construct() 
	{
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth', array('only'=>array('getIndex')));
	}

	public function index() 
	{
		$questionInfo = Question::all();
  	  	$this->layout->content = View::make('questions.index')->with('questionInfo',$questionInfo);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('questions.create');
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
			'title'       => 'required',
			'text'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('questions/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$question = new Question;
			$question->title       = Input::get('title');
			$question->text      = Input::get('text');
			$question->save();

			// redirect
			Session::flash('message', 'Successfully created question!');
			return Redirect::to('questions');
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
		// get the question
		$question = Question::find($id);

		// show the view and pass the question to it
		return View::make('questions.show')
			->with('question', $question);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the question
		$question = Question::find($id);

		// show the edit form and pass the question
		return View::make('questions.edit')
			->with('question', $question);
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
			'title'       => 'required',
			'text'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('questions/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$question = Question::find($id);
			$question->title       = Input::get('title');
			$question->text      = Input::get('text');
     		$question->save();

			// redirect
			Session::flash('message', 'Successfully updated question!');
			return Redirect::to('questions');
		}
	}
	public function quote($id)
	{
		// get the question
		$question = Question::find($id);

		// show the view and pass the question to it
		return View::make('questions.quote')
					->with('question', $question);

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
		$question = Question::find($id);
		$question->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the question!');
		return Redirect::to('questions');
	}

}