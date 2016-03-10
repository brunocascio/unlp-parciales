<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Career;

class TypeController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response\Json
  */
  public function typesOfCourse($career_slug, $course_slug)
  {
    $career = Career::where('slug', $career_slug)->firstOrFail();

    $course = $career->courses->where('slug', $course_slug)->first();

    return response()->json(['types' => $course->types()]);

  }

}
