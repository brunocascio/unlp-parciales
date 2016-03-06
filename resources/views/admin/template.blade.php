@extends('layouts.app')

@section('title', 'Administración')

@section('sidebar')
  <div class="col-md-3">
    <div class="panel-group" role="tablist">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="menuHeadingParciales">
          <a class="" role="button" data-toggle="collapse" href="#menu-parciales" aria-expanded="true" aria-controls="menu-parciales">
            <h4 class="panel-title">
              Parciales
            </h4>
          </a>
        </div>
        <div id="menu-parciales" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menuHeadingParciales" aria-expanded="true">
          <ul class="list-group">
            <li class="list-group-item">Ver todos</li>
            <li class="list-group-item">Agregar Nuevo</li>
            <li class="list-group-item">Categorías</li>
          </ul>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="menuHeadingUsuarios">
          <a class="" role="button" data-toggle="collapse" href="#menu-usuarios" aria-expanded="true" aria-controls="menu-usuarios">
            <h4 class="panel-title clearfix">
              <div class="pull-left">
                Usuarios
              </div>
              <div class="pull-right">
                <span class="badge">{{ totalUsers() }}</span>
              </div>
            </h4>
          </a>
        </div>
        <div id="menu-usuarios" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menuHeadingUsuarios" aria-expanded="true">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{{ route('admin.users') }}">Ver todos</a>
            </li>
            <li class="list-group-item">Agregar Nuevo</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <div class="col-md-9">
    @yield('main')
  </div>
@endsection
