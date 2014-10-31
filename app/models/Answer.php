<?php

class Answer extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'answers';

	public $timestamps = true;
	
	//Answer __belongs_to__User
	public function user()
	{
		return $this->belongsTo('User');
	}

    // Answer __belongs_to__ Question
    public function question()
    {
        return $this->belongsTo('Question');
    }

	public function getAnswerInfo($id)
	{
        return DB::query('SELECT * FROM answers WHERE id=?',array($id));
    }

}
