
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
  <label for="name">{{ trans('texts.resource.name') }}</label>
  <input type="text" name="name" class="form-control" value="{{ $resource->name or old('name') }}">
  @if ($errors->has('name'))
    <span class="help-block">
      <strong>{{ $errors->first('name') }}</strong>
    </span>
  @endif
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group {{ $errors->has('resource_date') ? 'has-error' : '' }}">
      <label for="resource_date">{{ trans('texts.resource.date') }}</label>
      <input type="date" name="resource_date" class="form-control" value="{{ $resource->resource_date or old('resource_date') }}">
      @if ($errors->has('resource_date'))
        <span class="help-block">
          <strong>{{ $errors->first('resource_date') }}</strong>
        </span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group {{ $errors->has('number') ? 'has-error' : '' }}">
      <label for="number">{{ trans('texts.resource.number.text') }} ({{ trans('texts.optional') }})</label>
      <input type="text" name="number" class="form-control" value="{{ $resource->number or old('number') }}" placeholder="{{ trans('texts.resource.number.placeholder') }}">
      @if ($errors->has('number'))
        <span class="help-block">
          <strong>{{ $errors->first('number') }}</strong>
        </span>
      @endif
    </div>
  </div>
</div>
<div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
  <label for="course_id">{{ trans('texts.course.name') }}</label>
  <select class="form-control selectpicker" name="course_id" data-live-search="true">
    <option></option>
    <?php $course_id = isset($resource) ? $resource->course->id : old('course_id'); ?>
    @foreach($courses as $course)
      <option
        value="{{$course->id}}"
        {{ $course->id == $course_id ? 'selected' : ''}}>
          {{ $course->name }}
      </option>
    @endforeach
  </select>
  @if ($errors->has('course_id'))
    <span class="help-block">
      <strong>{{ $errors->first('course_id') }}</strong>
    </span>
  @endif
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group {{ $errors->has('teacher_id') ? 'has-error' : '' }}">
      <label for="teachers_id">{{ trans('texts.teacher.name') }} ({{ trans('texts.optional') }})</label>
      <select class="form-control selectpicker" name="teacher_id" data-live-search="true">
        <option></option>
        <?php if ( !empty($resource) && $resource->teacher ): ?>
          <?php $teacher_id = $resource->teacher->id; ?>
        <?php else: ?>
          <?php $teacher_id = old('teacher_id'); ?>
        <?php endif ?>
        @foreach($teachers as $teacher)
          <option
            value="{{$teacher->id}}"
            {{ $teacher->id == $teacher_id ? 'selected' : ''}}>
              {{ $teacher->name }}
          </option>
        @endforeach
      </select>
      @if ($errors->has('teacher_id'))
        <span class="help-block">
          <strong>{{ $errors->first('teacher_id') }}</strong>
        </span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group {{ $errors->has('type_id') ? 'has-error' : '' }}">
      <label for="types_id">{{ trans('texts.resource.type') }}</label>
      <select class="form-control selectpicker" name="type_id" data-live-search="true">
        <option></option>
        <?php $type_id = isset($resource) ? $resource->type->id : old('type_id'); ?>
        @foreach($types as $type)
          <option
            value="{{$type->id}}"
            {{ $type->id == $type_id ? 'selected' : ''}}>
              {{ $type->name }}
          </option>
        @endforeach
      </select>
      @if ($errors->has('type_id'))
        <span class="help-block">
          <strong>{{ $errors->first('type_id') }}</strong>
        </span>
      @endif
    </div>
  </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
  <label for="description">{{ trans('texts.description') }} ({{ trans('texts.optional') }})</label>
  <textarea name="description" class="form-control" rows="3">{{ $resource->description or old('description') }}</textarea>
  @if ($errors->has('description'))
    <span class="help-block">
      <strong>{{ $errors->first('description') }}</strong>
    </span>
  @endif
</div>
<div class="form-group {{ $errors->has('file') ? 'has-error' : '' }} file-container">
  <label class="control-label">{{ trans('texts.file') }}</label>
  @if ( empty($hideUpload) )
    <input
      name="file"
      type="file"
      data-allowed-file-extensions='[{{ file_allowed_extensions_string() }}]'>
    <span class="help-block">
      @if ($errors->has('file'))
        <strong>{{ $errors->first('file') }}</strong>
      @endif
      <p>{{trans('texts.accepteds_formats') }}: {{ implode(', ', file_allowed_extensions()) }}</p>
    </span>
  @else
    @if ( $resource )
      <ul class="list-group">
        @foreach($resource->files as $file)
          <li class="list-group-item">
            <a href="{{ get_public_files_url($file->url) }}" target="_blank">
              {{ $file->fullname() }}
            </a>
          </li>
        @endforeach
      </ul>
    @endif
  @endif
</div>

<hr>

<button type="submit" class="btn btn-block btn-success">{{ trans('texts.upload') }}</button>
