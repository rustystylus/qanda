<?php

class Tag extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	public $table = 'tags';

	public $timestamps = true;

    public function questions()
    {
        return $this->belongsToMany('Question');
    }
}