<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    public $timestamps = false;

    protected $fillable = ['value'];

    public static function googleAnalitycsCode() {
      $gcode = self::where('key', 'google-analitycs')->first();
      return $gcode
        ? $gcode->value
        : '';
    }

    public static function hasGoogleAnalitycsCode() {
      return !empty(self::googleAnalitycsCode());
    }
}
