<?php

class Tag extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tags';

	public $timestamps = false;
    // Rag __has_many__ Question
    public function question()
    {
        return $this->hasAndBelongsToMany('Question');
    }
	public function getTagInfo($text)
	{
        return DB::query('SELECT * FROM tag WHERE text=?',array($text));
    }

}