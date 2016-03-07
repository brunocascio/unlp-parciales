<nav class="panel-group" role="tablist">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="menuHeadingTests">
      <a class="" role="button" data-toggle="collapse" href="#menu-tests" aria-expanded="true" aria-controls="menu-tests">
        <h4 class="panel-title">
          Tests
        </h4>
      </a>
    </div>
    <div id="menu-tests" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menuHeadingTests" aria-expanded="true">
      <ul class="list-group">
        <li class="list-group-item">All</li>
        <li class="list-group-item">New</li>
        <li class="list-group-item">Categories</li>
      </ul>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="menuHeadingUsers">
      <a class="" role="button" data-toggle="collapse" href="#menu-users" aria-expanded="true" aria-controls="menu-users">
        <h4 class="panel-title clearfix">
          <div class="pull-left">
            Users
          </div>
          <div class="pull-right">
            <span class="badge">{{ totalUsers() }}</span>
          </div>
        </h4>
      </a>
    </div>
    <div id="menu-users" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menuHeadingUsers" aria-expanded="true">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="{{ route('admin.users') }}">All</a>
        </li>
        <li class="list-group-item">New</li>
      </ul>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="menuHeadingCareers">
      <a class="" role="button" data-toggle="collapse" href="#menu-careers" aria-expanded="true" aria-controls="menu-careers">
        <h4 class="panel-title clearfix">
          <div class="pull-left">
            Careers
          </div>
          <div class="pull-right">
            <span class="badge">{{ totalCareers() }}</span>
          </div>
        </h4>
      </a>
    </div>
    <div id="menu-careers" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menuHeadingCareers" aria-expanded="true">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="{{ route('admin.careers.index') }}">All</a>
        </li>
        <li class="list-group-item">
          <a href="{{ route('admin.careers.create') }}">New</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <a role="button" href="{{ route('admin.configs') }}">
        <h4 class="panel-title">
          Settings
        </h4>
      </a>
    </div>
  </div>
</nav>
