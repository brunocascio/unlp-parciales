<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  public $timestamps = false;

  protected $guarded = [ 'id' ];

  public function resource() {
    return $this->belongsTo('App\Resource');
  }
}
