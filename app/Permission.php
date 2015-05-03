<?php namespace WellingtonBare;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {

    protected $fillable = [
        'name'
    ];

    public function roles()
    {
        return $this->belongsToMany('WellingtonBare\Role')->withTimestamps();
    }

}
