@extends('layouts.app')

@section('content')
  <section class="panel bg-white shadow natural-language-container">
    <div class="panel-body">
      <div class="text-center section clearfix">
        <div class="col-sm-4 hidden-xs text">I Study</div>
        <div class="col-sm-8 col-xs-12">
          <div class="row">
            <select id="career-select" class="selectpicker" data-live-search="true" title="Select a Career">
              <option></option>
              @foreach($careers as $career)
                <option value="{{$career->slug}}">{{ $career->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="text-center section clearfix">
        <div class="col-sm-4 hidden-xs text">Coursing</div>
        <div class="col-sm-8 col-xs-12">
          <div class="row">
            <select id="course-select" class="selectpicker" data-live-search="true" disabled title="Select a Course">
              <option></option>
            </select>
          </div>
        </div>
      </div>

      <div class="text-center section clearfix">
        <div class="col-sm-4 hidden-xs text">And I Want</div>
        <div class="col-sm-8 col-xs-12">
          <div class="row">
            <select id="type-select" class="selectpicker" data-live-search="true" disabled data-title="Select a Resource">
              <option></option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="panel-footer">
      <div class="text-center section clearfix">
        <button id="search" type="button" class="btn btn-block btn-info disabled">Search Resources</button>
      </div>
    </div>
  </section>
@endsection
