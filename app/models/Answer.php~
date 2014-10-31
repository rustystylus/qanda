<?php

class Translation extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'translations';

	public $timestamps = true;
	
	//Tranlation __belongs_to__User
	public function user()
	{
		return $this->belongsTo('User');
	}

    // Translation __belongs_to__ Document
    public function document()
    {
        return $this->belongsTo('Document');
    }

	public function getTranslationInfo($id)
	{
        return DB::query('SELECT * FROM translations WHERE id=?',array($id));
    }

}