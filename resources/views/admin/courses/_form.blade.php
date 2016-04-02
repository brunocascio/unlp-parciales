<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <label class="col-sm-2 control-label">{{ trans('texts.name') }}</label>

  <div class="col-sm-8">
    <input type="text" class="form-control" name="name" value="{{ $course->name or old('name') }}">
    @if ($errors->has('name'))
      <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
    @endif
  </div>
</div>

<div class="form-group{{ $errors->has('careers') ? ' has-error' : '' }}">
  <label class="col-sm-2 control-label">{{ trans('texts.careers') }}</label>
  <div class="col-sm-8">
    <select
      class="form-control selectpicker show-tick"
      data-live-search="true"
      name="careers[]"
      data-selected-text-format="count > 2"
      data-style="btn-default"
      multiple>
      @foreach(App\Career::all() as $career)
        <?php $selected = isset($course) && $course->careers->contains($career); ?>
        <option value="{{ $career->id }}" {{ $selected ? 'selected' : ''}}>
          {{ $career->name }}
        </option>
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
      {{ trans('texts.save') }}
    </button>
  </div>
</div>
