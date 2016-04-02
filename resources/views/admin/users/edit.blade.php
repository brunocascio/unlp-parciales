@extends('admin.template')

@section('main')
  <div class="panel panel-default">
    <div class="panel-heading">{{ trans('texts.user.edit') }}</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.users.update', [$user->id]) }}" autocomplete="off">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PATCH">
        @include('admin.users._form')
      </form>
    </div>
  </div>
@endsection
