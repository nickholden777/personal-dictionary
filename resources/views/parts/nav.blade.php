<nav class="navbar navbar-default" id="menu">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::user())
        <ul class="nav navbar-nav">
          <li><a href="/english">English</a></li>
          <li><a href="/spanish">Spanish</a></li>
        </ul>
      @endif
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::user())
          <li><a href="{{ route('logout') }}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
        @else
           <li><a href="{{ route('login') }}"><i class="glyphicon glyphicon-share"></i> Sign in</a></li>
          <li><a href="{{ route('reg') }}"><i class="glyphicon glyphicon-lock"></i> Sign up</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>