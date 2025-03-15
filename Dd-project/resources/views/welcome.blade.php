<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ogalearn - Invetsments</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
         @vite(['resources/sass/app.scss', 'resources/js/app.js'])
         @vite(['resources/css/app.css'])
    </head>
    <body class="antialiased">
        <div class="message">
            <a href="https://t.me/Singhal_Anurag" target="_blank"><i class='bx bxl-telegram'></i></a>
        </div>
        @include("includes.nav")
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="hero">
                <div class="hero-container">
                    {{-- <div class="temporary-navbar">
                        <div class="logo">
                            <img src="{{asset('images/dall.png')}}" alt="">
                        </div>
                        <div class="tem-nav-links">
                            <ul>
                                <li><a class="nav-link temp" href="{{ url('/') }}">{{ config('Home', 'Home') }}</a></li>
                                <li><a class="nav-link temp" href="{{url('/about')}}">About Us</a></li>
                                <li><a class="nav-link temp" href="">Contact</a></li>
                                <li><a class="nav-link temp" href="">FAQ'S</a></li>
                                <li><a class="nav-link temp" href="">Terms</a></li>
                                <li><a class="nav-link temp" href="">Support</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="hero-content">
                        <div>
                            <h1>A trusted and secure <br> bitcoin and crypto <br> platform</h1>
                            <h2>Start Now</h2>
                            <h3 class="typing"></h3>
                        </div>
                    </div>
                    <div class="hero-crypto-chart">
                    </div>
                </div>
            </div>

            <div class="join">
                <div class="join-container">
                    <div class="join-h2">
                        <h1>How To Join</h1>
                        <h2>Get Started In Three Easy Steps</h2>
                    </div>
                    <div class="join-steps">
                        <div>
                            <img src="{{asset('images/register.png')}}" alt="">
                            <h2>Register</h2>
                            <p>Conplete our easy sign up form on the sign up page by clicking on this <a class="nav-link" href="{{ route('login') }}">Link</a></p>
                        </div>
                        <img class="line" src="{{asset('images/line.png')}}" alt="">
                        <div>
                            <img src="{{asset('images/plan.png')}}" alt="">
                            <h2>Choose a plan</h2>
                            <p>Log in to your Investment dashboard and choose an investment plan of your choice to kickstart you investment plan</p>
                        </div>
                        <img class="line2" src="{{asset('images/line.png')}}" alt="">
                        <div>
                            <img src="{{asset('images/earn.png')}}" alt="">
                            <h2>Earn Rewards</h2>
                            <p>After you have selected an investment plan, just relax and watch your earnong sky-rocket</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about" id="about">
                <div class="about-container">
                    <div class="about-image">
                        <img src="{{asset('images/about-image.webp')}}" alt="">
                    </div>
                    <div class="about-content">
                        <div class="about-text">
                            <h1>We Care About how Your Money <br> makes earnings for you.</h1>
                            <h3>bitofxinvestment.com is a registered and legal international investment trading company based in Poland and with the vision of becoming a prominent player in the crypto industry. Since then, we have diligently worked towards building our brand and have successfully gained the trust of customers in more than 250 countries worldwide. Our commitment to providing secure and dependable services has contributed to our standing as a leading brand.</h3>
                        </div>
                        <div class="tabTitles">
                            <button class="tabLinks active" onclick="opentab('skills')">Reason</button>
                            <button class="tabLinks" onclick="opentab('experience')">Trust</button>
                            <button class="tabLinks" onclick="opentab('education')">Growth</button>
                        </div>
                        <div class="tabContents active-content" id="skills">
                            <h4>Investing in cryptocurrency can be intimidating, especially for beginners. Sometimes managing a crypto investment is daunting due to the uncertainty and volatility of the market, as well as the time investment needed to be successful.</h4>
                        </div>
                        <div class="tabContents" id="experience">
                            <h4>Investing in cryptocurrency requires confidence, and trust is the foundation of every successful investment. We prioritize transparency, ensuring that you always have a clear view of your portfolio and market trends.</h4>
                        </div>
                        <div class="tabContents" id="education">
                            <h4>Every investment should lead to progress, and we make sure yours does. Our strategies are designed to foster consistent, sustainable growth, leveraging advanced market analysis and trend predictions to maximize your returns. We don’t just focus on short-term gains—we build pathways for long-term financial success. </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="plan">
                <div class="plan-container">
                    <div class="plan-h1">
                        <h1>Our Plans</h1>
                        <h2>Become part of a global community of people who have found <br>
                            their path to the crypto world</h2>
                    </div>
                    <div class="plan-package">
                        <div class="plan-pack-content">
                            <div class="pack-head">
                                <h5>STARTER PLAN</h5>
                                <h1>5% after 24 hours</h1>
                                <span></span>
                            </div>
                            <div class="pack-body">
                                <h5>Min: 50$</h5>
                                <h5>Max: 299$</h5>
                            </div>
                            <div class="pack-footer">
                                <h5>Duration: 24 hours</h5>
                                <h5>Profit withdraw: yes</h5>
                                <h5>Referral Commission: 10%</h5>
                            </div>
                            <div class="pack-link">
                                <a href="">Select Plan</a>
                            </div>
                        </div>
                        <div class="plan-pack-content">
                            <div class="pack-head">
                                <h5>BRONZE PLAN</h5>
                                <h1>10% Daily for 48 hours</h1>
                                <span></span>
                            </div>
                            <div class="pack-body">
                                <h5>Min: 300$</h5>
                                <h5>Max: 499$</h5>
                            </div>
                            <div class="pack-footer">
                                <h5>Duration: 48 hours </h5>
                                <h5>Profit withdraw: yes</h5>
                                <h5>Referral Commission: 10%</h5>
                            </div>
                            <div class="pack-link">
                                <a href="">Select Plan</a>
                            </div>
                        </div>
                        <div class="plan-pack-content">
                            <div class="pack-head">
                                <h5>GOLD PLAN</h5>
                                <h1>15% Daily for 4 days</h1>
                                <span></span>
                            </div>
                            <div class="pack-body">
                                <h5>MIN: 500$</h5>
                                <h5>MAX: 999$</h5>
                            </div>
                            <div class="pack-footer">
                                <h5>DURATION: 4 days</h5>
                                <h5>Profit withdraw: yes</h5>
                                <h5>REFERRAL COMMISSION: 10%</h5>
                            </div>
                            <div class="pack-link">
                                <a href="">Select Plan</a>
                            </div>
                        </div>
                        <div class="plan-pack-content">
                            <div class="pack-head">
                                <h5>PROMO PLAN</h5>
                                <h1>30% daily for 5 days</h1>
                                <span></span>
                            </div>
                            <div class="pack-body">
                                <h5>Min: 500$</h5>
                                <h5>Max: 4999$</h5>
                            </div>
                            <div class="pack-footer">
                                <h5>Duration: 5 days </h5>
                                <h5>Profit Withdraw:  yes</h5>
                                <h5>Referral Commission 10% yes</h5>
                            </div>
                            <div class="pack-link">
                                <a href="">Select Plan</a>
                            </div>
                        </div>
                        <div class="plan-pack-content">
                            <div class="pack-head">
                                <h5>DIAMOND PLAN</h5>
                                <h1>20% DAILY FOR 7 DAYS</h1>
                                <span></span>
                            </div>
                            <div class="pack-body">
                                <h5>MIN: 1000$</h5>
                                <h5>MAX: 4999$</h5>
                            </div>
                            <div class="pack-footer">
                                <h5>DURATION: 7 DAYS</h5>
                                <h5>PROFIT WITHDRAW: YES</h5>
                                <h5>REFERRAL COMMISSION: 10%</h5>
                            </div>
                            <div class="pack-link">
                                <a href="">Select Plan</a>
                            </div>
                        </div>
                        <div class="plan-pack-content">
                            <div class="pack-head">
                                <h5>GOLDEN PROMO PLAN</h5>
                                <h1>38% Daily for 12 days</h1>
                                <span></span>
                            </div>
                            <div class="pack-body">
                                <h5>Min: 5000$</h5>
                                <h5>Min: No Limit</h5>
                            </div>
                            <div class="pack-footer">
                                <h5>Duration: 12 days </h5>
                                <h5>Profit withdraw: yes</h5>
                                <h5>Referral Commission: 10%</h5>
                            </div>
                            <div class="pack-link">
                                <a href="">Select Plan</a>
                            </div>
                        </div>
                        <div class="plan-pack-content">
                            <div class="pack-head">
                                <h5>PLATINUM PLAN</h5>
                                <h1>25% DAILY FOR 12 DAYS</h1>
                                <span></span>
                            </div>
                            <div class="pack-body">
                                <h5>MIN: 5000$</h5>
                                <h5>Min: NO LIMIT</h5>
                            </div>
                            <div class="pack-footer">
                                <h5>DURATION: 12 DAYS</h5>
                                <h5>PROFIT WITHDRAW: YES</h5>
                                <h5>REFERRAL COMMISSION: 10%</h5>
                            </div>
                            <div class="pack-link">
                                <a href="">Select Plan</a>
                            </div>
                        </div>
                        <div class="plan-pack-content">
                            <div class="pack-head">
                                <h5>FAMILY JOINT ACCOUNT</h5>
                                <h1>50% Daily for 2 months (60 Days)</h1>
                                <span></span>
                            </div>
                            <div class="pack-body">
                                <h5>MIN: 7000$</h5>
                                <h5>Min: UNLIMITED</h5>
                            </div>
                            <div class="pack-footer">
                                <h5>DURATION: 60 Days</h5>
                                <h5>PROFIT WITHDRAW: YES</h5>
                                <h5>REFERRAL COMMISSION: 10%</h5>
                            </div>
                            <div class="pack-link">
                                <a href="">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="perform">
                <div class="perform-container">
                    <div class="perform-left">
                        <div class="left-top">
                            <div class="left-top-con">
                                <div class="left-icon">
                                    <i class='bx bxs-coin-stack'></i>
                                </div>
                                <div>
                                    <h2>Get More Profit</h2>
                                    <p>More than 25 million users globally</p>
                                </div>
                            </div>
                            <div class="left-top-con">
                                <div class="left-icon">
                                    <i class='bx bx-support'></i>
                                </div>
                                <div>
                                    <h2>24/7 Support</h2>
                                    <p>Powered by an amazing customer service</p>
                                </div>
                            </div>
                        </div>
                        <div class="left-bottom">
                            <div class="left-bottom-con">
                                <div class="left-icon">
                                    <i class='bx bx-shield'></i>
                                </div>
                                <div>
                                    <h2>Strong Protection</h2>
                                    <p>Utilising top-tier security practices</p>
                                </div>
                            </div>
                            <div class="left-bottom-con">
                                <div class="left-icon">
                                    <i class='bx bx-user-check'></i>
                                </div>
                                <div>
                                    <h2>Reliability</h2>
                                    <p>Regulated by various authorities around the world</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="perform-right">
                        <h1>High Performance Investment</h1>
                        <p>Use our innovative tech infrastructure to offer a state-of-the-art trading experience to you. Leverage our trading and custody platform and get 24/7 access to the world of crypto investments.</p>
                    </div>
                </div>
            </div>

            <div class="payment">
                <div class="payment-container">
                    <div class="payment-h1">
                        <h1>ACCEPTED PAYMENT METHODS</h1>
                        <p>SECURE PAYMENT WITH SSL ENCRYPTION</p>
                    </div>
                    <div class="payment-options">
                        <div><i class='bx bxl-bitcoin'></i>bitcoin</div>
                        <div><i class='bx bxs-diamond bx-rotate-180' ></i>ethereum</div>
                        <div>tether</div>
                        <div>Perfect Money</div>
                        <div>PAYEER</div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="footer-container">
                    <div class="first-section">
                        <div>
                            <h3>About Company</h3>
                            <span></span>
                            <p>ul. Podbipięty Longinusa 41, Kraków, 31-980, Poland.
                                    Email: admin@bitofxinvestment.com
                                    Email: support@bitofxinvestment.com
                            </p>
                        </div>
                    </div>
                    <div class="second-section">
                        <h3>Useful Links</h3>
                        <span></span>
                        <li>
                            <a href="{{ url('/home') }}">Home</a>
                            <a href="{{ route('login') }}">Log In</a>
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    </div>
                    <div class="third-section">
                        <h3>Company</h3>
                        <span></span>
                        <li>
                            <a href="#about">About Us</a>
                            <a href="#a">Contact us</a>
                        </li>
                    </div>
                </div>
                <h5>Copyright © 2025 Ogalearn - Investment.com All rights reserved. Made By Wills institute</h5>
            </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js" integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //TYPE WRITER EFFECT
        var typed = new Typed(".typing", {
            strings:["", "We specialise on Making money", "", "We are extremely cheap", "", "Our services are affordable", "", "We give you the best offer", "", "Ethical Hacker", "", "Youtuber"],
            typeSpeed:100,
            BackSpeed:300,
            loop:true
        })


        // FOR ABOUT EFFECT
        const tabLinks = document.getElementsByClassName("tabLinks");
        const tabContents = document.getElementsByClassName("tabContents");

        function opentab(tabname) {
            for(tabLink of tabLinks){
                tabLink.classList.remove("active");
            }
            for(tabContent of tabContents){
                tabContent.classList.remove("active-content");
            }
            event.currentTarget.classList.add("active");
            document.getElementById(tabname).classList.add("active-content")
        }



        
        // document.addEventListener("DOMContentLoaded", function () {
        //     let navbar = document.querySelector(".navbar");
        //     let lastScrollTop = 0;
        
        //     window.addEventListener("scroll", function () {
        //         let scrollTop = window.scrollY || document.documentElement.scrollTop;
        
        //         if (scrollTop > 50) {
        //             navbar.classList.add("show"); // Show navbar when scrolling down
        //         } else {
        //             navbar.classList.remove("show"); // Hide navbar when at the top
        //         }
        //     });
        // });
    </script>
</html>
