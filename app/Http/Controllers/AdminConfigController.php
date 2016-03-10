<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Config;

class AdminConfigController extends AdminController
{
    public function index()
    {
      return view('admin.configs.index', [ 'configs' => Config::all() ]);
    }
}
