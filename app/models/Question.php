<?php
class Question extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';

    public $timestamps = true;

    // Question __belongs_to__ User
    public function user()
    {
        return $this->belongsTo('User');
    }

	// Question __has_many__ Answers
	public function answers()
	{
		return $this->hasMany('Answer');
	}
    // Question __has_many__ Tags
    public function tags()
    {
        return $this->belongsToMany('Tag','questions_tags','question_id','tag_id');
    }

}
