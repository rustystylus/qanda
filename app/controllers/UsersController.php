<?php
 
class UsersController extends BaseController {
    protected $layout = "layouts.basic";

	public function __construct() 
	{
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth', array('only'=>array('getDashboard')));
	    
	}

	public function getRegister() {
  	  	$this->layout->content = View::make('users.register');
	}

	public function postCreate() {
	      $validator = Validator::make(Input::all(), User::$rules);
 
	    if ($validator->passes()) {
	        // validation has passed, save user in DB
		$user = new User;
		$user->firstname = Input::get('firstname');
		$user->lastname = Input::get('lastname');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
/*		Mail::send('emails.welcome', array('key' => 'value'), function($message)
		{
			$message->to('rustystylus@gmail.com', 'Richard Marsden')->subject('Welcome!');
			$message->from('rustystylus@gmail.com', 'Sender');
		});
*/
		Auth::login($user);

		return Redirect::to('users/dashboard')->with('message', 'Thanks for registering! You are logged in');

	    } else {
	        // validation has failed, display error messages
	        return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
   
	    }       
	}

	public function getLogin() 
	{
	    $this->layout->content = View::make('users.login');
	}

	public function getLogout() 
	{
	    Auth::logout();
	    return Redirect::to('users/login')->with('message', 'Your are now logged out!');
	}

	public function postSignin() 
	{
	    if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) 
	    {
		    return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
		} 
		else 
		{
		    return Redirect::to('users/login')
		        ->with('message', 'Your username/password combination was incorrect')
		        ->withInput();
		}        
	}

	public function getDashboard()
	{
    	$this->layout->content = View::make('users.dashboard');
	}
    public function getQanda()
    {
        $this->layout->content = View::make('users.qanda');
    }
    public function getTodo()
    {
        $this->layout->content = View::make('users.todo');
    }
    public function getRestapi()
    {
        $this->layout->content = View::make('users.restapi');
    }
    public function getCv()
    {
        $this->layout->content = View::make('users.cv');
    }
		/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
?>
