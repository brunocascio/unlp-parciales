<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\UnxUser as User;

class AdminUserController extends Controller
{
    public function index()
    {
      $users = User::all();
      return view('admin.users.list', ['users' => $users]);
    }
}
