<?php
class DocumentsController extends BaseController {
    protected $layout = "layouts.basic";

	public $restful=true;

	public function __construct()
	{
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth', array('only'=>array('getIndex')));
	}

	public function index()
	{
		$documentInfo = User::find(Auth::user()->id)->documents;
  	  	$this->layout->content = View::make('documents.index')->with('documentInfo', $documentInfo);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('documents.create')
									->with('user', Auth::user());
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
			'user_id'		=>	'required',
			'description'   => 'required',
			'content'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('documents/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$document = new Document;
			$document->user_id       = Input::get('user_id');
			$document->description       = Input::get('description');
			$document->content      = Input::get('content');
			$document->save();

			// redirect
			Session::flash('message', 'Successfully created document!');
			return Redirect::to('documents');
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
		// get the document
		$document = Document::find($id);

		// show the view and pass the document to it
		$this->layout->content = View::make('documents.show')
			->with('document', $document);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the document
		$document = Document::find($id);

		// show the edit form and pass the document
		$this->layout->content = View::make('documents.edit')
			->with('document', $document);
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
			'description'       => 'required',
			'content'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) 
		{
			return Redirect::to('documents/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} 
		else 
		{
			// store
			$document = Document::find($id);
			$document->description       = Input::get('description');
			$document->content      = Input::get('content');
     		$document->save();

			// redirect
			Session::flash('message', 'Successfully updated document');
			return Redirect::to('documents');
		}
	}
	public function quote($id)
	{
		// get the document
		$document = Document::find($id);

		// show the view and pass the document to it
		$this->layout->content = View::make('documents.quote')
					->with('document', $document);

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
		$document = Document::find($id);
		$document->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the document');
		return Redirect::to('documents');
	}

}