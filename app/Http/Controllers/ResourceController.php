<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Http\Requests\StoreResourceRequest;
use DB;
use Storage;
use App\Resource;
use App\Course;
use App\Type;
use App\Teacher;
use App\File;

class ResourceController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('resources.index', ['resources' => Resource::all()]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('resources.create', [
      'courses' => Course::all(),
      'teachers' => Teacher::all(),
      'types' => Type::all()
    ]);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  StoreResourceRequest  $request
  * @return \Illuminate\Http\Response
  */
  public function store(StoreResourceRequest $request)
  {
    DB::transaction(function() use ($request)
    {
      $resource = Resource::create($request->all());
      $uploadedFile = $request->file('file');

      $type = $uploadedFile->getClientOriginalExtension();
      $name = $resource->generateResourceName();
      $path = $resource->generateResourcePath();

      Storage::put($path, file_get_contents($uploadedFile->getRealPath()));

      $file = File::create([
        'resource_id' => $resource->id,
        'name' => $name,
        'type' => $type,
        'url' => "{$path}.{$type}"
      ]);

      return ( $resource && $file )
         ? redirect()->route('resources.show', [$resource->id])
         : redirect()->back()->with('error', 'Failed :( Try Again!');
    });
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
}
