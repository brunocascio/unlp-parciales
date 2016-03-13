@extends('admin.template')

@section('main')
  <div class="panel panel-default">
    <div class="panel-heading">Course New</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.courses.store') }}" autocomplete="off">
        {!! csrf_field() !!}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label class="col-sm-2 control-label">Name</label>

          <div class="col-sm-8">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('careers') ? ' has-error' : '' }}">
          <label class="col-sm-2 control-label">Careers</label>
          <div class="col-sm-8">
            <select class="form-control selectpicker show-tick"
                    data-live-search="true"
                    name="careers[]"
                    data-selected-text-format="count > 3"
                    data-header="Seleccione 1 o más"
                    multiple>
              @foreach(App\Career::all() as $career)
                <option value="{{ $career->id }}">{{ $career->name }}</option>
              @endforeach
            </select>
            @if ($errors->has('careers'))
              <span class="help-block">
                <strong>{{ $errors->first('careers') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 col-sm-offset-2">
            <button type="submit" class="btn btn-success">
              Create
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
