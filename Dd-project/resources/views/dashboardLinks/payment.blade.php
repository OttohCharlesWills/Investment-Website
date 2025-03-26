@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
@section('content')

<div class="home-container">
    <h1>Hello</h1>
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
                        <a href="#" class="select-plan">Select Plan</a>
                    </div>
                    <div class="pack-final">
                        <select class="payment-method">
                            <option value="">Select Payment Method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="tether">Tether</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="litecoin">Litecoin</option>
                        </select>
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
                        <a href="#" class="select-plan">Select Plan</a>
                    </div>
                    <div class="pack-final">
                        <select class="payment-method">
                            <option value="">Select Payment Method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="tether">Tether</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="litecoin">Litecoin</option>
                        </select>
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
                        <a href="#" class="select-plan">Select Plan</a>
                    </div>
                    <div class="pack-final">
                        <select class="payment-method">
                            <option value="">Select Payment Method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="tether">Tether</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="litecoin">Litecoin</option>
                        </select>
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
                        <a href="#" class="select-plan">Select Plan</a>
                    </div>
                    <div class="pack-final">
                        <select class="payment-method">
                            <option value="">Select Payment Method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="tether">Tether</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="litecoin">Litecoin</option>
                        </select>
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
                        <a href="#" class="select-plan">Select Plan</a>
                    </div>
                    <div class="pack-final">
                        <select class="payment-method">
                            <option value="">Select Payment Method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="tether">Tether</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="litecoin">Litecoin</option>
                        </select>
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
                        <a href="#" class="select-plan">Select Plan</a>
                    </div>
                    <div class="pack-final">
                        <select class="payment-method">
                            <option value="">Select Payment Method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="tether">Tether</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="litecoin">Litecoin</option>
                        </select>
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
                        <a href="#" class="select-plan">Select Plan</a>
                    </div>
                    <div class="pack-final">
                        <select class="payment-method">
                            <option value="">Select Payment Method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="tether">Tether</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="litecoin">Litecoin</option>
                        </select>
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
                        <a href="#" class="select-plan">Select Plan</a>
                    </div>
                    <div class="pack-final">
                        <select class="payment-method">
                            <option value="">Select Payment Method</option>
                            <option value="bitcoin">Bitcoin</option>
                            <option value="tether">Tether</option>
                            <option value="ethereum">Ethereum</option>
                            <option value="litecoin">Litecoin</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".select-plan").forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault();

                let parentPack = this.closest(".plan-pack-content");
                let packFinal = parentPack.querySelector(".pack-final");

                // Close all other .pack-final sections
                document.querySelectorAll(".pack-final").forEach(pack => {
                    if (pack !== packFinal) {
                        pack.classList.remove("show");
                        setTimeout(() => { pack.style.display = "none"; }, 300);
                    }
                });

                // Toggle only the clicked one
                if (packFinal.classList.contains("show")) {
                    packFinal.classList.remove("show");
                    setTimeout(() => { packFinal.style.display = "none"; }, 300);
                } else {
                    packFinal.style.display = "block";
                    setTimeout(() => { packFinal.classList.add("show"); }, 10);
                }
            });
        });

        document.querySelectorAll(".payment-method").forEach(select => {
            select.addEventListener("change", function () {
                let payment = this.value;
                let parentPack = this.closest(".plan-pack-content");
                let planName = parentPack.querySelector(".pack-head h5").innerText.trim();

                if (payment) {
                    let url = `/payment/${payment}?plan=${encodeURIComponent(planName)}`;
                    window.location.href = url; // Redirect to the Laravel route
                }
            });
        });
    });
</script>

@endsection