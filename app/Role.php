<?php namespace WellingtonBare;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany('WellingtonBare\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('WellingtonBare\Permission');
    }

}
