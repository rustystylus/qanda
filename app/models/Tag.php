<?php

class Tag extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tags';

	public $timestamps = false;

	public function getTagInfo($text)
	{
        return DB::query('SELECT * FROM tag WHERE text=?',array($text));
    }

}