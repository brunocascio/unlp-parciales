@extends('admin.template')

@section('content')
  <article class="col-md-9 bg-white shadow radius padded">
    <form class="form" action="{{ route('admin.resources.update', [$resource->id]) }}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <input type="hidden" name="_method" value="PATCH">
      @include('admin.resources._form', ['hideUpload' => true])
    </form>
  </article>
@endsection
