<nav class="panel-group" role="tablist">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="menuHeadingResources">
      <a class="" role="button" data-toggle="collapse" href="#menu-resources" aria-expanded="true" aria-controls="menu-resources">
        <h4 class="panel-title clearfix">
          <div class="pull-left">
            {{ trans('texts.resources') }}
          </div>
          <div class="pull-right">
            <span class="label label-danger">{{ totalResourcesUnpublisheds() }}</span>
            <span class="label label-default">{{ totalResources() }}</span>
          </div>
        </h4>
      </a>
    </div>
    <div id="menu-resources" class="panel-collapse {{ !Route::is('admin.resources.*') ? 'collapse' : '' }}" role="tabpanel" aria-labelledby="menuHeadingResources" aria-expanded="true">
      <ul class="list-group">
        @if ( isModerator() )
          <li class="list-group-item">
            <a href="{{ route('admin.resources.index') }}">{{ trans('texts.all') }}</a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('admin.resources.unpublisheds') }}">{{ trans('texts.resource.unpublisheds') }}</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
  @if ( isAdmin() )
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="menuHeadingTypes">
        <a class="" role="button" data-toggle="collapse" href="#menu-types" aria-expanded="true" aria-controls="menu-types">
          <h4 class="panel-title clearfix">
            <div class="pull-left">
              {{ trans('texts.resource.types') }}
            </div>
            <div class="pull-right">
              <span class="label label-default">{{ totalTypes() }}</span>
            </div>
          </h4>
        </a>
      </div>
      <div id="menu-types" class="panel-collapse {{ !Route::is('admin.types.*') ? 'collapse' : '' }}" role="tabpanel" aria-labelledby="menuHeadingTypes" aria-expanded="true">
        <ul class="list-group">
          <li class="list-group-item">
            <a href="{{ route('admin.types.index') }}">{{ trans('texts.all') }}</a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('admin.types.create') }}">{{ trans('texts.new') }}</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="menuHeadingUsers">
        <a class="" role="button" data-toggle="collapse" href="#menu-users" aria-expanded="true" aria-controls="menu-users">
          <h4 class="panel-title clearfix">
            <div class="pull-left">
              {{ trans('texts.users') }}
            </div>
            <div class="pull-right">
              <span class="label label-default">{{ totalUsers() }}</span>
            </div>
          </h4>
        </a>
      </div>
      <div id="menu-users" class="panel-collapse {{ !Route::is('admin.users.*') ? 'collapse' : '' }}" role="tabpanel" aria-labelledby="menuHeadingUsers" aria-expanded="true">
        <ul class="list-group">
          <li class="list-group-item">
            <a href="{{ route('admin.users.index') }}">{{ trans('texts.all') }}</a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('admin.users.create') }}">{{ trans('texts.new') }}</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="menuHeadingCareers">
        <a class="" role="button" data-toggle="collapse" href="#menu-careers" aria-expanded="true" aria-controls="menu-careers">
          <h4 class="panel-title clearfix">
            <div class="pull-left">
              {{ trans('texts.careers') }}
            </div>
            <div class="pull-right">
              <span class="label label-default">{{ totalCareers() }}</span>
            </div>
          </h4>
        </a>
      </div>
      <div id="menu-careers" class="panel-collapse {{ !Route::is('admin.careers.*') ? 'collapse' : '' }}" role="tabpanel" aria-labelledby="menuHeadingCareers" aria-expanded="true">
        <ul class="list-group">
          <li class="list-group-item">
            <a href="{{ route('admin.careers.index') }}">{{ trans('texts.all') }}</a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('admin.careers.create') }}">{{ trans('texts.new') }}</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="menuHeadingCourses">
        <a class="" role="button" data-toggle="collapse" href="#menu-courses" aria-expanded="true" aria-controls="menu-courses">
          <h4 class="panel-title clearfix">
            <div class="pull-left">
              {{ trans('texts.courses') }}
            </div>
            <div class="pull-right">
              <span class="label label-default">{{ totalCourses() }}</span>
            </div>
          </h4>
        </a>
      </div>
      <div id="menu-courses" class="panel-collapse {{ !Route::is('admin.courses.*') ? 'collapse' : '' }}" role="tabpanel" aria-labelledby="menuHeadingCourses" aria-expanded="true">
        <ul class="list-group">
          <li class="list-group-item">
            <a href="{{ route('admin.courses.index') }}">{{ trans('texts.all') }}</a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('admin.courses.create') }}">{{ trans('texts.new') }}</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="menuHeadingTeachers">
        <a class="" role="button" data-toggle="collapse" href="#menu-teachers" aria-expanded="true" aria-controls="menu-teachers">
          <h4 class="panel-title clearfix">
            <div class="pull-left">
              {{ trans('texts.teachers') }}
            </div>
            <div class="pull-right">
              <span class="label label-default">{{ totalTeachers() }}</span>
            </div>
          </h4>
        </a>
      </div>
      <div id="menu-teachers" class="panel-collapse {{ !Route::is('admin.teachers.*') ? 'collapse' : '' }}" role="tabpanel" aria-labelledby="menuHeadingTeachers" aria-expanded="true">
        <ul class="list-group">
          <li class="list-group-item">
            <a href="{{ route('admin.teachers.index') }}">{{ trans('texts.all') }}</a>
          </li>
          <li class="list-group-item">
            <a href="{{ route('admin.teachers.create') }}">{{ trans('texts.new') }}</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <a role="button" href="{{ route('admin.configs.index') }}">
          <h4 class="panel-title">
            {{ trans('texts.settings') }}
          </h4>
        </a>
      </div>
    </div>
  @endif
</nav>
