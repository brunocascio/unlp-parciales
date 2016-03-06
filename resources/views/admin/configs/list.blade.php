@extends('admin.template')

@section('main')
  <table class="table table-striped table-bordered table-condensed">
    <thead>
      <th>Key</th>
      <th>Value</th>
      <th>Actions</th>
    </thead>
    <tbody>
      @foreach ($configs as $config)
        <tr>
          <td>{{ $config->key }}</td>
          <td>{{ $config->value }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="actions">
              <button type="button" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-pencil"></i>
              </button>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
