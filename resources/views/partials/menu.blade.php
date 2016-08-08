<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">

      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Branding Image -->
      <a class="navbar-brand" href="{{ url('/') }}">
        {{ getSiteTitle() }}
      </a>
      <div class="text-center loader hidden" id="loading">
        <div class='uil-ripple-css' style='transform:scale(0.2);'>
          <div></div>
        </div>
      </div>
    </div>


    <div class="collapse navbar-collapse" id="app-navbar-collapse">

      <ul class="nav navbar-nav navbar-left">
        @if (Auth::guest())
          <li><a href="{{ url('/login') }}">{{ trans('texts.login') }}</a></li>
        @else
          @if ( isModerator() )
            <li><a href="{{ route('admin.dashboard') }}">{{ trans('texts.dashboard') }}</a></li>
          @endif
        @endif
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (!Auth::guest())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ ucfirst(Auth::user()->name) }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/logout') }}">{{ trans('texts.logout') }}</a></li>
            </ul>
          </li>
        @endif
        <li>
          @if ( ! Route::is('resources.create') )
            <button
              role="button"
              data-href="{{ route('resources.create') }}"
              class="btn btn-sm btn-success navbar-btn">
                {{ trans('texts.upload_resource') }}
            </button>
          @else
            <button
              role="button"
              data-href="{{ route('home') }}"
              class="btn btn-sm btn-danger navbar-btn">
                {{ trans('texts.back') }}
            </button>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
