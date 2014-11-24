<?php
class Todo extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'todos';

    public $timestamps = true;

    // Question __belongs_to__ User
    public function user()
    {
        return $this->belongsTo('User');
    }


    // Todo __has_many__ Tags
  /*  public function tags()
    {
        return $this->belongsToMany('Tag');
    }
    */
}
