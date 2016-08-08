@extends('layouts.app')

@section('title', trans('texts.upload_resource'))

@section('content')
  <article class="col-md-10 col-md-offset-1 bg-white shadow radius padded margined">
    <form class="form validate" action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data">
      {!! csrf_field() !!}
      @include('admin.resources._form')
    </form>
  </article>
@endsection

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.1/js/fileinput.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.1/js/fileinput_locale_es.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
  <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
  <script type="text/javascript">
    $('[type="file"]').fileinput({
      showUpload: false,
      overwriteInitial: false,
      maxFileSize: 10000,
      minFileCount: 1,
      maxFileCount: 1,
      language: "{{ App::getLocale() }}"
    }).on('fileerror', function() {
      $('button[type="submit"]').button('reset');
    });
  </script>
@endpush
