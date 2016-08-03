@extends('admin.template')

@section('main')
  <table class="table table-striped table-bordered table-condensed">
    <thead>
      <th>{{ trans('texts.name') }}</th>
      <th>{{ trans('texts.type.name') }}</th>
      <th>{{ trans('texts.downloads') }}</th>
      <th>{{ trans('texts.active') }}?</th>
      <th></th>
    </thead>
    <tbody>
      @foreach ($resources as $resource)
        <tr>
          <td>{{ $resource->name }}</td>
          <td>{{ $resource->type->name }}</td>
          <td>{{ $resource->downloads_count }}</td>
          <td>
            @if (!$resource->published)
            <form class="form-inline" action="{{ route('admin.resources.publish', [$resource->id]) }}" method="POST">
            @else
            <form class="form-inline" action="{{ route('admin.resources.unpublish', [$resource->id]) }}" method="POST">
            @endif
              {!! csrf_field() !!}
              <input type="hidden" name="_method" value="PUT">
              <button type="submit" class="btn btn-sm {{ $resource->published ? 'btn-danger' : 'btn-info' }}">
                <i class="glyphicon {{ $resource->published ? 'glyphicon-ban-circle' : 'glyphicon-ok-circle' }}"></i>
                <span>{{ !$resource->published ? trans('texts.resource.publish') : trans('texts.resource.unpublish') }}</span>
              </button>
            </form>
          </td>
          <td>
            @if ( isModerator() )
              <div class="pull-left">
                <a role="button" class="btn btn-sm btn-primary" href="{{ route('admin.resources.edit', [$resource->id])}}">
                  <i class="glyphicon glyphicon-pencil"></i>
                </a>
              </div>
            @endif
            @if ( isAdmin() )
              <div class="pull-left">
                <form class="form-inline" action="{{ route('admin.resources.destroy', [$resource->id]) }}" method="POST">
                  {!! csrf_field() !!}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-sm btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                  </button>
                </form>
              </div>
            @endif
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
