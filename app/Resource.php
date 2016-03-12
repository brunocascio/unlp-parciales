<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Resource extends Model implements SluggableInterface
{
  use SluggableTrait;

  protected $guarded = [ 'approved_by', 'published', 'file' ];

  protected $sluggable = [ 'build_from' => 'name', 'save_to' => 'slug' ];

  public function course() {
    return $this->belongsTo('App\Course');
  }

  public function teacher() {
    return $this->hasOne('App\Teacher');
  }

  public function type() {
    return $this->belongsTo('App\Type');
  }

  public function approved_by() {
    return $this->hasOne('App\UnxUser');
  }

  public function files() {
    return $this->hasMany('App\File');
  }

  public function generateResourceFolder() {
    return "{$this->course->slug}/{$this->type->slug}";
  }

  public function generateResourcePath() {
    $folder = $this->generateResourceFolder();
    $filename = $this->generateResourceName();
    return "{$folder}/${filename}";
  }

  public function generateResourceName() {
    $file_slug = str_slug($this->name);
    return "{$this->id}-{$file_slug}";
  }
}
