<?php
class TranslationsController extends BaseController {

    protected $layout = "layouts.basic";

	public $restful=true;

	public function __construct()
	{
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth', array('only'=>array('getIndex')));
	}

	public function index()
	{
		$translationInfo = Translation::orderBy('id', 'DESC')->get();
  	  	$this->layout->content = View::make('translations.index')->with('translationInfo',$translationInfo);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{		
		// get the document
		$document = Document::find($id);

		$this->layout->content = View::make('translations/create')
					->with('document', $document);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'language_id'=>'required',
		//	'content'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('translations/'.$id.'/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$translation = new Translation;
			$translation->user_id = Auth::user()->id;
			$translation->document_id = $id;			
			$translation->language_id = Input::get('language_id');			
			$translation->save();

			// redirect
			Session::flash('message', 'Successfully created translation!');
			return Redirect::to('documents/'.$id);
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
		// get the translation
		$translation = Translation::find($id);

		// show the view and pass the translation to it
		$this->layout->content = View::make('translations.show')
			->with('translation', $translation);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the translation
		$translation = Translation::find($id);

		// show the edit form and pass the translation
		$this->layout->content = View::make('translations.edit')
			->with('translation', $translation);
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
			'document_id'=>'required',	
			'language_id'=>'required',
			'content'      => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('translations/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$translation = Translation::find($id);
			$translation->user_id = Auth::user()->id;
			$translation->document_id = Input::get('document_id');			
			$translation->language_id = Input::get('language_id');			
			$translation->content = Input::get('content');
			$translation->save();

			// redirect
			Session::flash('message', 'Successfully updated translation!');
			return Redirect::to('translations');
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
		$translation = Translation::find($id);
		$translation->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the translation!');
		return Redirect::to('translations');
	}

}