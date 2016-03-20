@extends('layouts.app')

@section('content')
  <section class="col-sm-6 col-sm-offset-3 col-xs-12 center-vertical">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <div class="pull-left width-90">
          <h2 class="panel-title text-overflow">{{ $resource->name }}</h2>
        </div>
        <div class="pull-right icon-text">
          <i class="glyphicon glyphicon-download"></i>
          <span>{{ $resource->downloads_count }}</span>
        </div>
      </div>
      <div class="panel-body">
        <div class="text-overflow">
          <strong>{{ trans('texts.teacher.name') }}:</strong>
          <span>{{ $resource->teacher->name }}</span>
        </div>
        <div class="text-overflow">
          <strong>{{ trans('texts.date') }}:</strong>
          <span>{{ $resource->resource_date_formated() }}</span>
        </div>
        <div class="text-overflow">
          <strong>{{ trans('texts.resource.type') }}:</strong>
          <span>{{ $resource->number ? $resource->number : '-' }}</span>
        </div>
        <div>
          <strong>{{ trans('texts.description') }}</strong>
          <div class="text-overflow">{{ $resource->description ? $resource->description : '-' }}</div>
        </div>
      </div>
      <div class="panel-footer clearfix">
        @foreach($resource->files as $file)
          <a class="pull-right btn btn-block btn-success" href="{{ route('files.download', [$file->name]) }}">
            {{ trans('texts.download') }} (.{{ $file->type }})
          </a>
        @endforeach
      </div>
    </div>
  </section>
@endsection
