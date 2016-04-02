@extends('layouts.app')

@section('title', trans('texts.upload_resource'))

@section('content')
  <article class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 bg-white shadow radius padded margined">
    <form class="form" action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      @include('admin.resources._form')
    </form>
  </article>
@endsection
