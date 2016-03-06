@extends('layouts.app')

@section('title', 'Administración')

@section('sidebar')
  <aside class="col-md-3">
    @include('admin.partials.menu')
  </aside>
@endsection

@section('content')
  <section class="col-md-9">
    @yield('main')
  </section>
@endsection
