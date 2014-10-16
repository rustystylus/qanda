<?php

class Answer extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'answers';

	public $timestamps = false;

	public function getAnswerInfo($id)
	{
        return DB::query('SELECT * FROM answer WHERE id=?',array($id));
    }

}