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
            <strong>Profesor:</strong>
            <span>{{ $resource->teacher->name }}</span>
          </div>
          @if ( $resource->number )
            <div class="">
              <strong>Fecha/Mesa:</strong>
              <span>{{ $resource->number }}</span>
            </div>
          @endif
        </div>
        <div class="panel-footer">
          @foreach($resource->files as $file)
            <a href="{{ route('files.download', [$file->name]) }}">Descargar</a>
          @endforeach
        </div>
      </div>
    </article>
  @endforeach
@endsection
