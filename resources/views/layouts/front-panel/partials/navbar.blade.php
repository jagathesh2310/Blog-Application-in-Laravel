<header class="default-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container px-3">
          <a class="navbar-brand" href="/">
            <h2 class="text-primary">Advance Blogging</h2>
          </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="lnr lnr-menu"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                <ul class="navbar-nav scrollable-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Articles</a></li>
                    <li><a href="/">Categories</a></li>
                    <li><a href="/">Tags</a></li>
                    <li><a href="/about">About</a></li>
                    @if (Route::has('login'))
                    @auth
                        <!-- Dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" onclick="dropMenu()">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;
                        </a>
                        <div class="dropdown-menu menu1" style="display: none" id="dropMenu">
                            @if (true)
{{--                                {{route('admin.profile')}}--}}
{{--                            {{ route('admin.dashboard') }}--}}
                            <a href="/" class="dropdown-item" target="_blank"> <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;{{Auth::user()->name}}</a>
                            <a class="dropdown-item" href="/"><i class="fa fa-tv" aria-hidden="true"></i>&nbsp; Dashboard</a>
                            @elseif(true)
                            <a href="{{route('user.profile')}}" class="dropdown-item" target="_blank"> <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;{{Auth::user()->name}}</a>
                            <a class="dropdown-item" href="{{ route('user.dashboard') }}"><i class="fa fa-tv" aria-hidden="true"></i>&nbsp; Dashboard</a>
                            <a class="dropdown-item" href="{{route('user.like.posts')}}"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp; Favorite List</a>
                            @else
                            null
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>

                    </li>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>

                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @endauth

                 @endif
                </ul>
              </div>
        </div>
    </nav>
</header>
