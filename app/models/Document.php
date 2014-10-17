<?php
class Document extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'documents';

	public $timestamps = true;

    // Document __has_many__ Translations
    public function translations()
    {
        return $this->hasMany('Translation');
    }

	public function getDocumentInfo($id)
	{
        return DB::query('SELECT * FROM documents WHERE id=?',array($id));
    }

}