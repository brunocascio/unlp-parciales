<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Course extends Model implements SluggableInterface
{
    use SluggableTrait;

    public $timestamps = false;

    protected $hidden = ['pivot'];

    protected $fillable = [ 'name' ];

    protected $sluggable = [ 'build_from' => 'name', 'save_to' => 'slug' ];

    public function careers() {
      return $this->belongsToMany('App\Career', 'careers_courses');
    }

    public function resources() {
      return $this->hasMany('App\Resource');
    }
}
