@extends('admin.template')

@section('main')
  <table class="table table-striped table-bordered table-condensed">
    <thead>
      <th>{{ trans('texts.name') }}</th>
      <th>{{ trans('texts.email') }}</th>
      <th>{{ trans('texts.role') }}</th>
      <th></th>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->role }}</td>
          <td>
            <div class="pull-left">
              <a role="button" class="btn btn-sm btn-primary" href="{{ route('admin.users.edit', [$user->id])}}">
                <i class="glyphicon glyphicon-pencil"></i>
              </a>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
