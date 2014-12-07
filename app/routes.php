<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('form', function(){
    return View::make('form');
});

Route::any('form-submit', function(){
    $exfile=Input::file('file');

    $result=Excel::selectSheetsByIndex(0)->load($exfile)->get();
    if (isset($result))
    {
        DB::table('rmexcel')->delete();

        foreach ($result as $row)
        {
            $excel = new Rmexcel;
            $excel->category = $row['category'];
            $excel->sub_category = $row['sub_category'];
            $excel->part_number = $row['part_number'];
            $excel->description = $row['description'];
            $excel->save();
        }
    }
    return Redirect::to('Rmexcel/index');
});

Route::controller('users', 'UsersController');
// Route group for API versioning
Route::group(array('prefix' => 'api/v1', /*'before' => 'auth.basic'*/), function()
{
    Route::resource('url', 'UrlController');
});
Route::get('/authtest', array('before' => 'auth.basic', function()
{
    return View::make('hello');
}));

Route::resource('tags', 'TagsController');
Route::get('tags/{id}/create', array('as' => 'create', 'uses' => 'TagsController@create'));

Route::resource('questions', 'QuestionsController');
//Route::get('questions/quote/{id}', array('as' => 'quote', 'uses' => 'QuestionsController@quote'));

Route::resource('answers', 'AnswersController');
Route::get('answers/{id}/create', array('as' => 'create', 'uses' => 'AnswersController@create'));
Route::post('answers/{id}/store', array('as' => 'store', 'uses' => 'AnswersController@store'));
Route::get('answers/{id}/show', array('as' => 'show', 'uses' => 'AnswersController@show'));

Route::resource('todos', 'TodosController');
Route::get('todos/{id}/priorityUp', array('as' => 'priorityUp', 'uses' => 'TodosController@priorityUp'));
Route::get('todos/{id}/priorityDown', array('as' => 'priorityDown', 'uses' => 'TodosController@priorityDown'));

Route::resource('Rmexcel', 'RmexcelsController');

Route::get('/', 'UsersController@getDashboard');
Route::any('{path?}', 'UsersController@getDashboard');

