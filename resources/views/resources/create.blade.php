@extends('layouts.app')

@section('content')
  <article class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 bg-white shadow radius padded margined">
    <form class="form" action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name')}}">
        @if ($errors->has('name'))
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group {{ $errors->has('resource_date') ? 'has-error' : '' }}">
            <label for="resource_date">Resource Date</label>
            <input type="date" name="resource_date" class="form-control" value="{{old('resource_date')}}">
            @if ($errors->has('resource_date'))
              <span class="help-block">
                <strong>{{ $errors->first('resource_date') }}</strong>
              </span>
            @endif
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group {{ $errors->has('number') ? 'has-error' : '' }}">
            <label for="number">Resource Number (Optional)</label>
            <input type="text" name="number" class="form-control" value="{{old('number')}}">
            @if ($errors->has('number'))
              <span class="help-block">
                <strong>{{ $errors->first('number') }}</strong>
              </span>
            @endif
          </div>
        </div>
      </div>
      <div class="form-group {{ $errors->has('course_id') ? 'has-error' : '' }}">
        <label for="course_id">Course</label>
        <select class="form-control selectpicker" name="course_id" data-live-search="true">
          <option></option>
          @foreach($courses as $course)
            <option
              value="{{$course->id}}"
              {{ $course->id == old('course_id') ? 'selected' : ''}}>
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
            <label for="teachers_id">Teacher (Optional)</label>
            <select class="form-control selectpicker" name="teacher_id" data-live-search="true">
              <option></option>
              @foreach($teachers as $teacher)
                <option
                  value="{{$teacher->id}}"
                  {{ $teacher->id == old('teacher_id') ? 'selected' : ''}}>
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
            <label for="types_id">Type</label>
            <select class="form-control selectpicker" name="type_id" data-live-search="true">
              <option></option>
              @foreach($types as $type)
                <option
                  value="{{$type->id}}"
                  {{ $type->id == old('type_id') ? 'selected' : ''}}>
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
        <label for="description">Description (Optional)</label>
        <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
        @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
        @endif
      </div>
      <div class="form-group {{ $errors->has('file') ? 'has-error' : '' }}">
        <label class="control-label">File</label>
        <input
          name="file"
          type="file"
          class="file file-upload file-loading"
          data-allowed-file-extensions='[{{ file_allowed_extensions_string() }}]'">
        @if ($errors->has('file'))
          <span class="help-block">
            <strong>{{ $errors->first('file') }}</strong>
          </span>
        @endif
      </div>
      <hr>
      <button type="submit" class="btn btn-block btn-success">Send</button>
    </form>
  </article>
@endsection
