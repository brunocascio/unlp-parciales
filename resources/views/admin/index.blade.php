@extends('admin.template')

@section('main')
  <aside class="jumbotron">
    <div class="text-center">
      <h1>Hi {{ Auth::user()->name }}!</h1>
    </div>
  </aside>
@endsection
