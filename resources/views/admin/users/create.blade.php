@extends('admin.template')

@section('main')
  <div class="panel panel-default">
    <div class="panel-heading">{{ trans('texts.user.new') }}</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.users.store') }}" autocomplete="off">
        {!! csrf_field() !!}
        @include('admin.users._form')
      </form>
    </div>
  </div>
@endsection
