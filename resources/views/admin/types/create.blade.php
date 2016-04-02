@extends('admin.template')

@section('main')
  <div class="panel panel-default">
    <div class="panel-heading">{{ trans('texts.type.new') }}</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.types.store') }}" autocomplete="off">
        {!! csrf_field() !!}
        @include('admin.types._form')
      </form>
    </div>
  </div>
@endsection
