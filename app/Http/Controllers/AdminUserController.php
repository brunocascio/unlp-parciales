<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UnxUser as User;

class AdminUserController extends AdminController
{
    public function index()
    {
      return view('admin.users.index', [ 'users' => User::all() ]);
    }
}
