<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container con-nav">
        <a class="navbar-brand" href="{{ url('/') }}">
            
            <div class="logo">
                <img src="{{asset('images/dall.png')}}" alt="">
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item nav-flex">
                        <a class="nav-link" href="{{ url('/') }}">
                            {{ config('Home', 'Home') }}
                        </a>
                        <a class="nav-link" href="#about">About</a>
                        {{-- <a class="nav-link" href="{{url('/about')}}">About</a> --}}
                        <a class="nav-link" href="">Terms</a>
                    </li>
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown drop-nav">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <div class="home-other">
                            <a class="home-dash nav-link" href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class='bx bxs-dashboard'></i> Dashboard</a>
                            <a class="nav-link" href="{{url('/terms')}}"><i class='bx bxs-file-doc'></i> Terms</a>
                            <a class="nav-link" href="{{url('/plans')}}"><i class='bx bxs-package'></i> View Packages</a>
                            {{-- <a class="nav-link" href=""><i class='bx bx-user-voice'></i> Referals</a> --}}
                            <a class="nav-link" href="{{url('/deposit')}}"><i class='bx bxs-wallet' ></i> Deposit</a>
                            <a class="nav-link" href="{{url('/withdraw')}}"><i class='bx bx-money'></i> Withdraw</a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>