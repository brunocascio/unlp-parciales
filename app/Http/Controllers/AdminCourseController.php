<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseFormRequest;
use App\Course;

class AdminCourseController extends AdminController
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('admin.courses.list', [ 'courses' => Course::all() ]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin.courses.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  StoreCourseFormRequest  $request
  * @return \Illuminate\Http\Response
  */
  public function store(StoreCourseFormRequest $request)
  {

    $course = Course::create($request->all());

    $course->careers()->attach($request->get('careers'));

    return redirect()
      ->route('admin.courses.index')
      ->with('success', 'Save Successfully');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    // ..
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $course = Course::findOrFail($id);

    return view('admin.courses.edit')->with('course', $course);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  StoreCourseFormRequest  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(StoreCourseFormRequest $request, $id)
  {
    $course = Course::findOrFail($id);

    $course->update($request->all());

    $careers = $request->has('careers') ? $request->get('careers') : [];

    $course->careers()->sync($careers);

    return redirect()
      ->route('admin.courses.index')
      ->with('success', 'Updated Successfully');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    Course::destroy($id);

    return redirect()
      ->route('admin.courses.index')
      ->with('success', 'Deleted Successfully');
  }
}
