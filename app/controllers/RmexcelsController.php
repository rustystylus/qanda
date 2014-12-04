<?php
class RmexcelsController extends BaseController {
   protected $layout = "layouts.basic";

    public $restful=true;

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('auth', array('only'=>array('getIndex')));
    }

    public function index()
    {
       /* if (! Auth::check()) {
            return Redirect::to('users/login');
        }*/
        $RmexcelList = Rmexcel::all();
        $this->layout->content = View::make('Rmexcel.index')->with(array('RmexcelList'=> $RmexcelList));
    }
    public function show()
    {
      $RmexcelList = Rmexcel::all();
        $this->layout->content = View::make("Rmexcel.index")->with(array('RmexcelList'=> $RmexcelList));
    }
 /*   public function create()
    {

    }
    public function store()
    {

    }*/
    public function destroy()
    {

        Rmexcel::truncate();
       // $deleteList->delete();

        $this->layout->content = View::make('Rmexcel.destroy');
    }
}
