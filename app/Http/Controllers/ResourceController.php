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
  * Show the resource
  *
  * @return \Illuminate\Http\Response
  */
  public function show($slug)
  {
    $resource = Resource::where('slug', $slug)->firstOrFail();

    return view('resources.show', [ 'resource' => $resource ]);
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

    $data = $request->input();

    if ( empty($data['teacher_id']) ) {
      $data['teacher_id'] = null;
    }

    DB::transaction(function() use ($request, $data)
    {
      $resource = Resource::create($data);
      $uploadedFile = $request->file('file');

      $type = $uploadedFile->getClientOriginalExtension();
      $name = $resource->generateResourceName();
      $path = $resource->generateResourcePath();

      Storage::put("{$path}.{$type}", file_get_contents($uploadedFile->getRealPath()));

      $file = File::create([
        'resource_id' => $resource->id,
        'name' => $name,
        'type' => $type,
        'url' => "{$path}.{$type}"
      ]);

      if ( !$resource || !$file ) {
        return redirect()->back()->with('error', 'Failed :( Try Again!');
      }
    });

    return redirect()
    ->route('home')
    ->with('info', 'Resource Uploaded. Pending of revision.');
  }
}
