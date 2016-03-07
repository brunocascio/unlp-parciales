<div class="container-fluid">
  @if ( session('success'))
    <div class="alert alert-success" role="alert">
      <p>{{ session('success')}}</p>
    </div>
  @endif

  @if ( session('info'))
    <div class="alert alert-info" role="alert">
      <p>{{ session('info')}}</p>
    </div>
  @endif

  @if ( session('error') )
    <div class="alert alert-error" role="alert">
      <p>{{ session('error')}}</p>
    </div>
  @endif
</div>
