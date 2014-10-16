<?php
class AnswersController extends BaseController {

    protected $layout = "layouts.basic";

	public $restful=true;

	public function __construct() 
	{
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth', array('only'=>array('getIndex')));
	}

	public function index() 
	{
		$answerInfo = Answer::orderBy('id', 'DESC')->get();
  	  	$this->layout->content = View::make('answers.index')->with('answerInfo',$answerInfo);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
		// get the question
		$question = Question::find($id);
				return View::make('answers/create')
		->with('question', $question);

		//$this->layout->content = View::make('questions.create');

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
			'text'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('answers/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$answer = new Answer;
			$answer->text      = Input::get('text');
			$answer->save();

			// redirect
			Session::flash('message', 'Successfully created answer!');
			return Redirect::to('answers');
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
		// get the answer
		$answer = Answer::find($id);

		// show the view and pass the answer to it
		return View::make('answers.show')
			->with('answer', $answer);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		// get the answer
		$answer = Answer::find($id);

		// show the edit form and pass the answer
		return View::make('answers.edit')
			->with('answer', $answer);
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
			'text'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('answers/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$answer = Answer::find($id);
			$answer->text      = Input::get('text');
			$answer->save();

			// redirect
			Session::flash('message', 'Successfully updated answer!');
			return Redirect::to('answers');
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
		$answer = Answer::find($id);
		$answer->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the answer!');
		return Redirect::to('answers');
	}

}