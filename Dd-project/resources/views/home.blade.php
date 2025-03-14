
    @extends('layouts.app')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    @section('content')
    <div class="home-container">
        <div class="message">
            <a href="https://t.me/Singhal_Anurag" target="_blank"><i class='bx bxl-telegram'></i></a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                    <div class="log-message">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div id="mebody" class="message-body">
                            {{ __('You are logged in!') }}
                            {{-- <span id="close">X</span> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="hero">
            <div class="hero-head">
                <h2>Dashboard</h2>
                <div class="head-pay">
                    <a href=""><i class='bx bx-cog'></i> Invest</a>
                    <a href=""><i class='bx bx-printer' ></i> Withdraw</a>
                </div>
            </div>
    </div>
    </div>
    @endsection
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const messageBody = document.getElementById("mebody");

        setTimeout(() => {
            let opacity = 1;
            const fadeOut = setInterval(() => {
                if (opacity <= 0) {
                    clearInterval(fadeOut);
                    messageBody.style.display = "none";
                } else {
                    opacity -= 0.1;
                    messageBody.style.opacity = opacity;
                }
            }, 100);
        }, 1000);
    });

    </script>
    {{-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> --}}