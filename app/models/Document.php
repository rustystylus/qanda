<?php
class Document extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'documents';

	public $timestamps = true;

	public function getDocumentInfo($id)
	{
        return DB::query('SELECT * FROM documents WHERE id=?',array($id));
    }

}