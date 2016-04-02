@extends('admin.template')

@section('main')
  <div class="panel panel-default">
    <div class="panel-heading">{{ trans('texts.career.new') }}</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.careers.store') }}" autocomplete="off">
        {!! csrf_field() !!}
        @include('admin.careers._form')
      </form>
    </div>
  </div>
@endsection
