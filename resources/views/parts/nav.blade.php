<nav class="navbar" id="menu">
  <a class="navbar-brand logo" href="/"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i></a>
  <button class="navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    @if(Auth::user())
    <ul class="nav navbar-nav">
      <li class="nav-item"><a href="/english" class="nav-link"><i class="fa fa-folder-open" aria-hidden="true"></i> English</a></li>
      <li class="nav-item"><a href="/spanish" class="nav-link"><i class="fa fa-folder-open" aria-hidden="true"></i> Spanish</a></li>
    </ul>
    @endif
    <ul class="nav navbar-nav pull-sm-right">
      @if(Auth::user())
          <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link"><i class="fa fa-power-off"></i> Logout</a></li>
        @else
           <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><i class="fa fa-male" aria-hidden="true"></i> Sign in</a></li>
          <li class="nav-item"><a href="{{ route('reg') }}" class="nav-link"><i class="fa fa-lock" aria-hidden="true"></i> Sign up</a></li>
        @endif
    </ul>
  </div>
</nav>
