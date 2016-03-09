@extends('admin.template')

@section('main')
  <table class="table table-striped table-bordered table-condensed">
    <thead>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Actions</th>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->role }}</td>
          <td>
            <div class="btn-group" role="group" aria-label="actions">
              <button type="button" class="btn btn-sm btn-default">
                <i class="glyphicon glyphicon-eye-open"></i>
              </button>
              <button type="button" class="btn btn-sm btn-primary">
                <i class="glyphicon glyphicon-pencil"></i>
              </button>
              <button type="button" class="btn btn-sm btn-danger delete">
                <i class="glyphicon glyphicon-trash"></i>
              </button>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
