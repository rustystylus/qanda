<?php

class Question extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'questions';

	public $timestamps = false;

	public function getQuestionInfo($id)
	{
        return DB::query('SELECT * FROM questions WHERE id=?',array($id));
    }

}