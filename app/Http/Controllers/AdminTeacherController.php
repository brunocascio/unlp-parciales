<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Teacher;
use App\Http\Requests\StoreTeacherFormRequest;

class AdminTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teachers.index', [ 'teachers' => Teacher::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTeacherFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherFormRequest $request)
    {
      $teacher = Teacher::create($request->all());

      return redirect()
        ->route('admin.teachers.index')
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $teacher = Teacher::findOrFail($id);

      return view('admin.teachers.edit')->with('teacher', $teacher);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreTeacherFormRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTeacherFormRequest $request, $id)
    {
      $teacher = Teacher::findOrFail($id);

      $teacher->update($request->all());

      return redirect()
        ->route('admin.teachers.index')
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
      Teacher::destroy($id);

      return redirect()
        ->route('admin.teachers.index')
        ->with('success', 'Deleted Successfully');
    }
}
