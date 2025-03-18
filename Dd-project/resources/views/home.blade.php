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
                <h2></h2>
                <div class="head-pay">
                    <a href=""><i class='bx bx-cog'></i> Invest</a>
                    <a href=""><i class='bx bx-printer' ></i> Withdraw</a>
                </div>
            </div>
            <div class="hero-body">
                <div class="dashboard-container">
                    <div class="card">
                        <h6>Total Balance</h6>
                        <h4>$0</h4>
                        <div class="graph-container">
                            <svg id="graph1">
                                <defs>
                                    <linearGradient id="gradient1" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="rgb(255, 0, 100)" stop-opacity="0.7"/>
                                        <stop offset="100%" stop-color="rgb(255, 0, 100)" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                                <path class="fill-area" fill="url(#gradient1)" />
                                <path class="line" stroke="rgb(255, 0, 100)" />
                            </svg>
                        </div>
                    </div>
                    <div class="card">
                        <h6>Active Investment</h6>
                        <h4>$0.00</h4>
                        <div class="graph-container">
                            <svg id="graph2">
                                <defs>
                                    <linearGradient id="gradient2" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="rgb(0, 255, 100)" stop-opacity="0.7"/>
                                        <stop offset="100%" stop-color="rgb(0, 255, 100)" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                                <path class="fill-area" fill="url(#gradient2)" />
                                <path class="line" stroke="rgb(0, 255, 100)" />
                            </svg>
                        </div>
                    </div>
                    <div class="card">
                        <h6>Total Referral Commission</h6>
                        <h4>$0.00</h4>
                        <div class="graph-container">
                            <svg id="graph3">
                                <defs>
                                    <linearGradient id="gradient3" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="rgb(255, 50, 50)" stop-opacity="0.7"/>
                                        <stop offset="100%" stop-color="rgb(255, 50, 50)" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                                <path class="fill-area" fill="url(#gradient3)" />
                                <path class="line" stroke="rgb(255, 50, 50)" />
                            </svg>
                        </div>
                    </div>
                    <div class="card">
                        <h6>Account Stats</h6>
                        <h4>Active</h4>
                        <div class="graph-container">
                            <svg id="graph4">
                                <defs>
                                    <linearGradient id="gradient4" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="rgb(255, 200, 0)" stop-opacity="0.7"/>
                                        <stop offset="100%" stop-color="rgb(255, 200, 0)" stop-opacity="0"/>
                                    </linearGradient>
                                </defs>
                                <path class="fill-area" fill="url(#gradient4)" />
                                <path class="line" stroke="rgb(255, 200, 0)" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h2 class="market">Market Trends</h2>
            <table>
                <thead>
                    <tr>
                        <th>Coin</th>
                        <th>Symbol</th>
                        <th>Price (USD)</th>
                        <th>24h Change</th>
                        <th>Market Cap</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $coin)
                        <tr>
                            <td>
                                <img src="{{ $coin['image'] }}" alt="{{ $coin['name'] }}" width="20">
                                {{ $coin['name'] }}
                            </td>
                            <td>{{ strtoupper($coin['symbol']) }}</td>
                            <td>${{ number_format($coin['current_price'], 2) }}</td>
                            <td style="color: {{ $coin['price_change_percentage_24h'] >= 0 ? 'green' : 'red' }}">
                                {{ number_format($coin['price_change_percentage_24h'], 2) }}%
                            </td>
                            <td>${{ number_format($coin['market_cap'], 0, '.', ',') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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

    <script>
        function createWaveAnimation(svgId, gradientId) {
    const svg = document.getElementById(svgId);
    const path = svg.querySelector(".line");
    const fillArea = svg.querySelector(".fill-area");
    let dataPoints = Array.from({ length: 30 }, () => Math.random() * 50 + 10);

    function generatePath() {
    let width = svg.clientWidth;
    let height = svg.clientHeight;
    let stepX = width / (dataPoints.length - 1);
    let d = `M 0 ${height} `; // Start from bottom

    if (dataPoints.length < 3) return; // Ensure enough points for smoothing

    let smoothedPoints = [];
    for (let i = 0; i < dataPoints.length; i++) {
        let x = i * stepX;
        let y = height - dataPoints[i];
        smoothedPoints.push({ x, y });
    }

    // Use Catmull-Rom Spline for smoothness
    for (let i = 0; i < smoothedPoints.length - 1; i++) {
        let p0 = smoothedPoints[i === 0 ? i : i - 1]; // Previous or first
        let p1 = smoothedPoints[i]; // Current
        let p2 = smoothedPoints[i + 1]; // Next
        let p3 = smoothedPoints[i + 2] || p2; // Next-next or last

        let cp1x = p1.x + (p2.x - p0.x) / 10; // Control point 1
        let cp1y = p1.y + (p2.y - p0.y) / 10;
        let cp2x = p2.x - (p3.x - p1.x) / 10; // Control point 2
        let cp2y = p2.y - (p3.y - p1.y) / 10;

        d += `C ${cp1x} ${cp1y}, ${cp2x} ${cp2y}, ${p2.x} ${p2.y} `;
    }

    d += `L ${width} ${height} L 0 ${height} Z`; // Close the shape
    path.setAttribute("d", d);
    fillArea.setAttribute("d", d);
}


    function updateWave() {
        dataPoints.shift();
        dataPoints.push(Math.random() * 50 + 10);
        generatePath();
    }

    generatePath();
    setInterval(updateWave, 10000); // Adjust speed if needed
}

window.onload = function () {
    createWaveAnimation("graph1", "gradient1");
    createWaveAnimation("graph2", "gradient2");
    createWaveAnimation("graph3", "gradient3");
    createWaveAnimation("graph4", "gradient4");
};

    </script>
    {{-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> --}}