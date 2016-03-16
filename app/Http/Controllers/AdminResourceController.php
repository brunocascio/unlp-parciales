<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Auth;
use App\Resource;
use App\Course;
use App\Teacher;
use App\Type;

class AdminResourceController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('admin.resources.index', [
          'resources' => Resource::published()->get()
        ]);
    }

    /**
     * Display a listing of the resources unpublisheds.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUnpublisheds()
    {
      return view('admin.resources.index', [
        'resources' => Resource::unpublished()->get()
      ]);
    }

    /**
     * Publishes the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function putPublish($id)
    {
      $published_by = Auth::user()->id;

      Resource::findOrFail($id)->publish($published_by);

      return redirect()
        ->route('admin.resources.unpublisheds')
        ->with(['success' => 'Published!']);
    }

    /**
     * Unpublishes the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function putUnpublish($id)
    {
      Resource::findOrFail($id)->unpublish();

      return redirect()
        ->route('admin.resources.index')
        ->with(['success' => 'Unpublished!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
      $resource = Resource::findOrFail($id);

      return view('admin.resources.edit', [
        'resource' => $resource,
        'teachers' => Teacher::all(),
        'courses' => Course::all(),
        'types' => Type::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function putUpdate(Request $request, $id)
    {
        // TODO:
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Resource::destroy($id);

      return redirect()
        ->route('admin.resources.index')
        ->with(['success' => 'Removed!']);
    }
}
