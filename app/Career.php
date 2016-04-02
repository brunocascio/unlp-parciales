<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Career extends Model implements SluggableInterface
{
    use SluggableTrait;

    public $timestamps = false;

    protected $fillable = [ 'name' ];

    protected $hidden = ['pivot'];

    protected $sluggable = [ 'build_from' => 'name', 'save_to'    => 'slug' ];

    public static function getRules($id = '') {
      return [
        'name' => "required|unique:careers,name,{$id}|min:4|max:100"
      ];
    }

    public function courses() {
      return $this->belongsToMany('App\Course', 'careers_courses');
    }
}
