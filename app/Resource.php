<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

use App\Type;

class Resource extends Model implements SluggableInterface
{
  use SluggableTrait;

  protected $guarded = [ 'approved_by', 'published', 'file' ];

  protected $sluggable = [ 'build_from' => 'name', 'save_to' => 'slug' ];

  public function course() {
    return $this->belongsTo('App\Course');
  }

  public function teacher() {
    return $this->belongsTo('App\Teacher');
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

  public function scopeWithTypeSlug($query, $slug) {
    $type = Type::where('slug', $slug)->firstOrFail();
    return $query->where('type_id', $type->id);
  }

  public function scopeUnpublished($query) {
    return $query->where('published', false);
  }

  public function scopePublished($query) {
    return $query->where('published', true);
  }

  public function publish() {
    $this->published = true;
    return $this->save();
  }

  public function unpublish() {
    $this->published = false;
    return $this->save();
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
