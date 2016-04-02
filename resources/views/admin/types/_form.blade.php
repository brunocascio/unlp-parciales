<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <label class="col-sm-2 control-label">{{ trans('texts.name') }}</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="name" value="{{ $type->name or old('name') }}">
    @if ($errors->has('name'))
      <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
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
