<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\File;
use DB;
use Storage;

class FileController extends Controller
{
    public function getDownloadFile( $name )
    {
      $file = File::where('name', $name)->firstOrFail();

      $file_absolute_path = get_public_resources_path($file->url);

      if ( file_exists($file_absolute_path) ) {
        $file->resource()->increment('downloads_count');
        return response()->download( $file_absolute_path );
      }

      abort(404);
    }
}
