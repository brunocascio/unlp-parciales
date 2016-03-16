@extends('layouts.app')

@section('content')
  @foreach($resources as $resource)
    <article class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <div class="pull-left">
            <h2 class="panel-title">{{ $resource->name }}</h2>
          </div>
          <div class="pull-right icon-text">
            <i class="glyphicon glyphicon-download"></i>
            <span>{{ $resource->downloads_count }}</span>
          </div>
        </div>
        <div class="panel-body">
          <div class="">
            <strong>Teacher:</strong>
            <span>{{ $resource->teacher->name }}</span>
          </div>
          <div class="">
            <strong>Resource Date:</strong>
            <span>{{ $resource->resource_date }}</span>
          </div>
          <div class="">
            <strong>Date Type:</strong>
            <span>{{ $resource->number ? $resource->number : '-' }}</span>
          </div>
          <div class="">
            <strong>Description</strong>
            <div>{{ $resource->description ? $resource->description : '-' }}</div>
          </div>
        </div>
        <div class="panel-footer">
          @foreach($resource->files as $file)
            <a href="{{ route('files.download', [$file->name]) }}">
              Download (.{{ $file->type }})
            </a>
          @endforeach
        </div>
      </div>
    </article>
  @endforeach
@endsection
