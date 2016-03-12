<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use DB;
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
    $types = DB::table('types')
      ->join('resources', 'resources.type_id', '=', 'types.id')
      ->join('courses', 'resources.course_id', '=', 'courses.id')
      ->join('careers_courses', 'careers_courses.course_id', '=', 'courses.id')
      ->join('careers', 'careers_courses.career_id', '=', 'careers.id')
      ->where('courses.slug', $course_slug)
      ->where('careers.slug', $career_slug)
      ->select('types.*')
      ->distinct()
      ->get();

    return response()->json(['types' => $types]);

  }

}
