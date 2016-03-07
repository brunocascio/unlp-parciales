@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="well natural-language-container">

          <div class="col-md-12 text-center section">
            <div class="text">Estudio</div>
            <div class="select">
              <select class="selectpicker" data-live-search="true">
                <option data-tokens="licenciatura en sistemas">Lic en Sistemas</option>
                <option data-tokens="licenciatura en informatica">Lic en informatica</option>
                <option data-tokens="analista programador universitario">Analista Programador</option>
              </select>
            </div>
          </div>

          <div class="col-md-12 text-center section">
            <div class="text"> y quiero</div>
            <div class="select">
              <select class="selectpicker" data-live-search="true">
                <option data-tokens="resumenes">Resumenes</option>
                <option data-tokens="coloquios">Coloquios</option>
                <option data-tokens="parciales">Parciales</option>
              </select>
            </div>
          </div>

          <div class="col-md-12 text-center section">
            <div class="text"> de</div>
            <div class="select">
              <select class="selectpicker" data-live-search="true">
                <option data-tokens="Programación Concurrente">Programación Concurrente</option>
                <option data-tokens="Base de datos 1">Base de datos 1</option>
                <option data-tokens="Base de datos 2">Base de datos 2</option>
              </select>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
