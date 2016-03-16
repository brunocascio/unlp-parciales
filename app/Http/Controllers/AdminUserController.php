<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\UnxUser as User;

class AdminUserController extends AdminController
{

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('admin.users.index', [ 'users' => User::all() ]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin.users.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  StoreUserRequest  $request
  * @return \Illuminate\Http\Response
  */
  public function store(StoreUserRequest $request)
  {
    $user = new User($request->all());
    $user->role = $request->get('role');
    $user->save();

    return redirect()
      ->route('admin.users.index')
      ->with('success', 'Created Successfully!');
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $user = User::findOrFail($id);

    return view('admin.users.edit', [ 'user' => $user ]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  UpdateUserRequest  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(UpdateUserRequest $request, $id)
  {
    $user = User::findOrFail($id);

    // Update password
    if ( empty($request->get('password')) )
    {
      $user->update($request->except(['password']));
    }
    else
    {
      $user->update($request->all());
    }

    // Update role
    if ( $user->role !== $request->get('role') )
    {
      $user->role = $request->get('role');
      $user->save();
    }

    return redirect()
    ->route('admin.users.index')
    ->with('success', 'Updated Successfully!');
  }

}
