<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Career;

class HomeController extends Controller
{

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('home', ['careers' => Career::all()]);
  }

  /**
  * Application maintenance.
  *
  * @return \Illuminate\Http\Response
  */
  public function maintenance()
  {
    if ( ! env('APP_MAINTENANCE', false) ) {
      return redirect()->route('home');
    }

    return view('maintenance');
  }
}
