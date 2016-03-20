<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\UpdateConfigRequest;
use App\Config;

class ConfigController extends AdminController
{

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('admin.configs.index', [ 'configs' => Config::all() ]);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $config = Config::findOrFail($id);

    return view('admin.configs.edit', [ 'config' => $config ]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  UpdateConfigRequest  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(UpdateConfigRequest $request, $id)
  {
    $config = Config::findOrFail($id)->update($request->all());

    return redirect()
      ->route('admin.configs.index')
      ->with('success', 'Updated Successfully!');
  }
}
