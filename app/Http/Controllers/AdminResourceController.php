<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Resource;

class AdminResourceController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.resources.index', ['resources' => Resource::published()->get()]);
    }

    public function getUnpublisheds()
    {
      return view('admin.resources.index', ['resources' => Resource::unpublished()->get()]);
    }

    public function putPublish($id)
    {
      Resource::findOrFail($id)->publish();

      return redirect()
        ->route('admin.resources.index')
        ->with(['success' => 'Published!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
