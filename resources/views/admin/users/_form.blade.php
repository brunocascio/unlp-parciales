<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <label class="col-sm-2 control-label">{{ trans('texts.name') }}</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="name" value="{{ $user->name or old('name') }}">
    @if ($errors->has('name'))
      <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
      </span>
    @endif
  </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
  <label class="col-sm-2 control-label">{{ trans('texts.email') }}</label>
  <div class="col-sm-8">
    <input type="text" class="form-control" name="email" value="{{ $user->email or old('email') }}">
    @if ($errors->has('email'))
      <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
    @endif
  </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
  <label class="col-sm-2 control-label">{{ trans('texts.password') }}</label>
  <div class="col-sm-4">
    <input type="password" class="form-control" name="password" value="" placeholder="{{trans('texts.empty_is_not_updated')}}" disabled>
    @if ($errors->has('password'))
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
    @endif
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <input type="checkbox" name="password-check" data-enable="[name='password']">
      <label>{{ trans('texts.update_password') }}?</label>
    </div>
  </div>
</div>

<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
  <label class="col-sm-2 control-label">{{ trans('texts.role') }}</label>
  <div class="col-sm-8">
    <select class="selectpicker" name="role" data-live-search="true">
      <option></option>
      <?php $current_role = isset($user) ? $user->role : old('role'); ?>
      @foreach(getAvailableRoles() as $role)
        <option value="{{$role}}" {{($current_role == $role) ? 'selected' : ''}}>
          {{$role}}
        </option>
      @endforeach
    </select>
    @if ($errors->has('role'))
      <span class="help-block">
        <strong>{{ $errors->first('role') }}</strong>
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
