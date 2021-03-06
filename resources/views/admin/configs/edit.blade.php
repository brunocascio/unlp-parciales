@extends('admin.template')

@section('main')
  <div class="panel panel-default">
    <div class="panel-heading">{{ trans('texts.config.edit') }}</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ route('admin.configs.update', [$config->id]) }}" autocomplete="off">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PATCH">

        <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
          <label class="col-sm-2 control-label">{{ trans('texts.value') }}</label>

          <div class="col-sm-8">
            <textarea class="form-control" name="value" rows="3">{{ $config->value }}</textarea>
            @if ($errors->has('value'))
              <span class="help-block">
                <strong>{{ $errors->first('value') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-2 col-sm-offset-2">
            <button type="submit" class="btn btn-success">
              {{ trans('texts.save') }}
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
