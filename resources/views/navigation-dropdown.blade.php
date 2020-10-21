<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="/img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('student.index')}}">Students</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('group.index')}}">Groups</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('join.form')}}">Join/remove student for groups</a>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </a>
                </form>
            </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
