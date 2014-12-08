<?php
class TodosController extends BaseController {
    protected $layout = "layouts.basic";

    public $restful=true;

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('auth', array('only'=>array('getIndex')));
    }

    public function index()
    {
        if (! Auth::check()) {
            return Redirect::to('users/login');
        }
        $todoInfo = User::find(Auth::user()->id)->todos;
        $this->layout->content = View::make('todos.index')->with('todoInfo', $todoInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->layout->content = View::make('todos.create')
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
            return Redirect::to('todos/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $todo = new Todo;
            $todo->user_id = Input::get('user_id');
            $todo->description = Input::get('description');
            $todo->content = Input::get('content');
            $todo->save();

            // redirect
            Session::flash('message', 'Successfully created todo!');
            return Redirect::to('todos');
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
        // get the todo
        $todo = Todo::find($id);
       // $tags = $todo->tags()->get();

        // show the view and pass the todo to it
        $this->layout->content = View::make('todos.show')
            ->with(array('todo'=> $todo, /*'tags'=>$tags*/));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the todo
        $todo = Todo::find($id);

        // show the edit form and pass the todo
        $this->layout->content = View::make('todos.edit')
            ->with('todo', $todo);
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
            return Redirect::to('todos/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        else
        {
            // store
            $todo = Todo::find($id);
            $todo->description       = Input::get('description');
            $todo->content      = Input::get('content');
            $todo->save();

            // redirect
            Session::flash('message', 'Successfully updated todo');
            return Redirect::to('todos');
        }
    }
    public function quote($id)
    {
        // get the todo
        $todo = Todo::find($id);

        // show the view and pass the todo to it
        $this->layout->content = View::make('todos.quote')
            ->with('todo', $todo);

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
        $todo = Todo::find($id);
        $todo->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the todo');
        return Redirect::to('todos');
    }

    public function priorityUp($id)
    {
       $todo = Todo::find($id);
       $todo->position++;
       $todo->save(); 
       return Redirect::to('todos');
    }

    public function priorityDown($id)
    {
        $todo = Todo::find($id);
        if($todo->position > 0)
        {
            $todo->position--;
            $todo->save();
        }
        return Redirect::to('todos');
    }

    public function done($id)
    {
        $todo = Todo::find($id);
        if($todo->position > 0)
        {
            $todo->position = 0;
            $todo->save();
        }
        return Redirect::to('todos');
    }

    public function undo($id)
    {
        $todo = Todo::find($id);
        if($todo->position == 0)
        {
            $todo->position = 1;
            $todo->save();
        }
        return Redirect::to('todos');
    }
}
