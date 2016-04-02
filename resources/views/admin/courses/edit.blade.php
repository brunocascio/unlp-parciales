@extends('admin.template')

@section('main')
  <div class="panel panel-default">
    <div class="panel-heading">{{ trans('texts.course.edit') }}</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.courses.update', [$course->id]) }}" autocomplete="off">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PATCH">
        @include('admin.courses._form')
      </form>
    </div>
  </div>
@endsection
