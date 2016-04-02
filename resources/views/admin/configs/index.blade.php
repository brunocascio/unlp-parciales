@extends('admin.template')

@section('main')
  <table class="table table-striped table-bordered table-condensed">
    <thead>
      <th>{{ trans('texts.key') }}</th>
      <th>{{ trans('texts.value') }}</th>
      <th></th>
    </thead>
    <tbody>
      @foreach ($configs as $config)
        <tr>
          <td>{{ $config->key }}</td>
          <td>{{ $config->value }}</td>
          <td>
            <div class="pull-left">
              <a role="button" class="btn btn-sm btn-primary" href="{{ route('admin.configs.edit', [$config->id])}}">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
