<?php

class Translation extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'translations';

	public $timestamps = false;

	public function getTranslationInfo($id)
	{
        return DB::query('SELECT * FROM translations WHERE id=?',array($id));
    }

}