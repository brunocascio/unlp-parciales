<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Type;
use App\Http\Requests\StoreTypeFormRequest;

class AdminTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.types.list', [ 'types' => Type::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTypeFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeFormRequest $request)
    {
      $type = Type::create($request->all());

      return redirect()
        ->route('admin.types.index')
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
      $type = Type::findOrFail($id);

      return view('admin.types.edit')->with('type', $type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreTypeFormRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTypeFormRequest $request, $id)
    {
      $type = Type::findOrFail($id);

      $type->update($request->all());

      return redirect()
        ->route('admin.types.index')
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
      Type::destroy($id);

      return redirect()
        ->route('admin.types.index')
        ->with('success', 'Deleted Successfully');
    }
}
