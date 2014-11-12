<?php

class Tag extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tags';

	public $timestamps = false;

    public function questions()
    {
        return $this->belongsToMany('Question','questions_tags','question_id','tag_id');
    }
	public function getTagInfo($text)
	{
        return DB::query('SELECT * FROM tag WHERE text=?',array($text));
    }

}