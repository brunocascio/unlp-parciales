@extends('admin.template')

@section('main')
  <div class="panel panel-default">
    <div class="panel-heading">{{ trans('texts.course.new') }}</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.courses.store') }}" autocomplete="off">
        {!! csrf_field() !!}
        @include('admin.courses._form')
      </form>
    </div>
  </div>
@endsection
