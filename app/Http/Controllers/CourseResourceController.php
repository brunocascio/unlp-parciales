<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Course;

class CourseResourceController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @param  String  $course_slug
  * @param  String  $type_slug
  * @return \Illuminate\Http\Response
  */
  public function index($course_slug, $type_slug = null)
  {

    $res = Course::where('slug', $course_slug)
      ->firstOrFail()
      ->resources();

    if ($type_slug) $res->withTypeSlug($type_slug);

    return view('resources.index', ["resources" => $res->get()]);
  }
}
