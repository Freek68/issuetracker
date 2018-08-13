<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark flex-md-nowrap p-0 mb-3 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="logoutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="logoutDropdown">
                        {!! \Form::open(['route' => 'logout']) !!}
                        {!! \Form::submit('Uitloggen', ['class' => 'dropdown-item']) !!}
                        {!! \Form::close() !!}
                        <div class="dropdown-divider"></div>
                        @if (auth()->check())
                            @if ( auth()->user()->isAdmin() )
                            <a class="dropdown-item" href="{{ route('users.index') }}">Users</a>
                            @endif
                            @if ( auth()->user()->isAdminOrAgent() )
                            <a class="dropdown-item" href="{{ route('issues.index') }}">Issues</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('changes.password') }}">Wachtwoord</a>
                        @endif
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>