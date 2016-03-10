@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="well natural-language-container">

          <div class="col-md-12 text-center section">
            <div class="text">Estudio</div>
            <div class="select">
              <select id="career-select" class="selectpicker" data-live-search="true">
                <option></option>
                @foreach($careers as $career)
                  <option value="{{$career->slug}}">{{ $career->name }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-md-12 text-center section">
            <div class="text"> materia</div>
            <div class="select">
              <select id="course-select" class="selectpicker" data-live-search="true" disabled>
                <option></option>
              </select>
            </div>
          </div>

          <div class="col-md-12 text-center section">
            <div class="text"> y quiero</div>
            <div class="select">
              <select id="type-select" class="selectpicker" data-live-search="true" disabled>
                <option></option>
              </select>
            </div>
          </div>

          <div class="col-md-12 text-center section">
            <button id="search" type="button" class="btn btn-block btn-default disabled">Voy a tener suerte</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
