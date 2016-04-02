<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Course;
use App\Career;

class CourseController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response\Json
  */
  public function coursesOfCarrer($slug)
  {
    $career = Career::where('slug', $slug)->firstOrFail();

    return response()->json(['courses' => $career->courses]);
  }

}
