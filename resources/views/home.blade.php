@extends('layouts.app')

@section('content')
  <section class="panel bg-white shadow natural-language-container">
    <div class="panel-body">
      <div class="text-center section clearfix">
        <div class="col-sm-4 hidden-xs text">{{ trans('texts.i_study') }}</div>
        <div class="col-sm-8 col-xs-12">
          <div class="row">
            <select id="career-select" class="selectpicker" data-live-search="true" title="{{ trans('texts.career_select') }}">
              <option></option>
              @foreach($careers as $career)
                <option value="{{$career->slug}}">{{ $career->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="text-center section clearfix">
        <div class="col-sm-4 hidden-xs text">{{ trans('texts.coursing') }}</div>
        <div class="col-sm-8 col-xs-12">
          <div class="row">
            <select id="course-select" class="selectpicker" data-live-search="true" disabled title="{{ trans('texts.course_select') }}">
              <option></option>
            </select>
          </div>
        </div>
      </div>

      <div class="text-center section clearfix">
        <div class="col-sm-4 hidden-xs text">{{ trans('texts.i_want') }}</div>
        <div class="col-sm-8 col-xs-12">
          <div class="row">
            <select id="type-select" class="selectpicker" data-live-search="true" disabled data-title="{{ trans('texts.resource_select') }}">
              <option></option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="panel-footer">
      <div class="text-center section clearfix">
        <button
          id="search"
          type="button"
          class="btn btn-block btn-info disabled"
          data-loading-text="Buscando..."
          data-toggle="button"
          autocomplete="off">
          {{ trans('texts.search_resources') }}
        </button>
      </div>
    </div>
  </section>
@endsection
