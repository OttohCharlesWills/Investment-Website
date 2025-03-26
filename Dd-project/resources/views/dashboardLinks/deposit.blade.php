@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
@section('content')
<style>
    .plans-container {
        max-width: 900px;
        margin: 20px auto;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
        color: #333;
    }

    .plans-container h2 {
        text-align: center;
        color: #d32f2f;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .plan {
        background: white;
        padding: 15px;
        margin: 15px 0;
        border-left: 5px solid #d32f2f;
        border-radius: 5px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
    }

    .plan h3 {
        color: #d32f2f;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .plan ul {
        list-style-type: none;
        padding: 0;
    }

    .plan ul li {
        padding: 5px 0;
        font-size: 16px;
    }

    .highlight {
        font-weight: bold;
        color: #d32f2f;
    }
</style>

<div class="plans-container">
    <h2>Investment Plans</h2>

    <div class="plan">
        <h3>PROMO PLAN</h3>
        <ul>
            <li><span class="highlight">30% daily</span> for 5 days</li>
            <li>Min: $500 | Max: $4999</li>
            <li>Referral Commission: 10%</li>
            <li>Duration: 5 days</li>
            <li>Profit Withdraw: Yes</li>
            <li>Btc: bc1qyg48uju7hmnds8c4qh679ug6dmlgmasddf02uw</li>
            <li>Eth: 0x1bD5FDEA71213CC5B9962F54de3E119A435A57C0</li>
            <li>USDT: TPx7hqrfjoGTsae7tZBwQL659wf4FcKC8X</li>
        </ul>
    </div>

    <div class="plan">
        <h3>GOLDEN PROMO PLAN</h3>
        <ul>
            <li><span class="highlight">38% daily</span> for 12 days</li>
            <li>Min: $5000 | Max: No limit</li>
            <li>Referral Commission: 10%</li>
            <li>Duration: 12 days</li>
            <li>Profit Withdraw: Yes</li>
            <li>Btc: bc1qyg48uju7hmnds8c4qh679ug6dmlgmasddf02uw</li>
            <li>Eth: 0x1bD5FDEA71213CC5B9962F54de3E119A435A57C0</li>
            <li>USDT: TPx7hqrfjoGTsae7tZBwQL659wf4FcKC8X</li>
        </ul>
    </div>

    <div class="plan">
        <h3>STARTER PLAN</h3>
        <ul>
            <li><span class="highlight">5% after 24 hours</span></li>
            <li>Min: $50 | Max: $299</li>
            <li>Referral Commission: 10%</li>
            <li>Duration: 24 hours</li>
            <li>Profit Withdraw: Yes</li>
            <li>Btc: bc1qyg48uju7hmnds8c4qh679ug6dmlgmasddf02uw</li>
            <li>Eth: 0x1bD5FDEA71213CC5B9962F54de3E119A435A57C0</li>
            <li>USDT: TPx7hqrfjoGTsae7tZBwQL659wf4FcKC8X</li>
        </ul>
    </div>

    <div class="plan">
        <h3>BRONZE PLAN</h3>
        <ul>
            <li><span class="highlight">10% daily</span> for 48 hours</li>
            <li>Min: $300 | Max: $499</li>
            <li>Referral Commission: 10%</li>
            <li>Duration: 48 hours</li>
            <li>Profit Withdraw: Yes</li>
            <li>Btc: bc1qyg48uju7hmnds8c4qh679ug6dmlgmasddf02uw</li>
            <li>Eth: 0x1bD5FDEA71213CC5B9962F54de3E119A435A57C0</li>
            <li>USDT: TPx7hqrfjoGTsae7tZBwQL659wf4FcKC8X</li>
        </ul>
    </div>

    <div class="plan">
        <h3>GOLD PLAN</h3>
        <ul>
            <li><span class="highlight">15% daily</span> for 4 days</li>
            <li>Min: $500 | Max: $999</li>
            <li>Referral Commission: 10%</li>
            <li>Duration: 4 days</li>
            <li>Profit Withdraw: Yes</li>
            <li>Btc: bc1qyg48uju7hmnds8c4qh679ug6dmlgmasddf02uw</li>
            <li>Eth: 0x1bD5FDEA71213CC5B9962F54de3E119A435A57C0</li>
            <li>USDT: TPx7hqrfjoGTsae7tZBwQL659wf4FcKC8X</li>
        </ul>
    </div>

    <div class="plan">
        <h3>FAMILY JOINT ACCOUNT</h3>
        <ul>
            <li><span class="highlight">50% daily</span> for 2 months (60 days)</li>
            <li>Min: $7000 | Max: Unlimited</li>
            <li>Referral Commission: 10%</li>
            <li>Duration: 60 days</li>
            <li>Profit Withdraw: Yes</li>
            <li>Btc: bc1qyg48uju7hmnds8c4qh679ug6dmlgmasddf02uw</li>
            <li>Eth: 0x1bD5FDEA71213CC5B9962F54de3E119A435A57C0</li>
            <li>USDT: TPx7hqrfjoGTsae7tZBwQL659wf4FcKC8X</li>
        </ul>
    </div>

    <div class="plan">
        <h3>DIAMOND PLAN</h3>
        <ul>
            <li><span class="highlight">20% daily</span> for 7 days</li>
            <li>Min: $1000 | Max: $4999</li>
            <li>Referral Commission: 10%</li>
            <li>Duration: 7 days</li>
            <li>Profit Withdraw: Yes</li>
            <li>Btc: bc1qyg48uju7hmnds8c4qh679ug6dmlgmasddf02uw</li>
            <li>Eth: 0x1bD5FDEA71213CC5B9962F54de3E119A435A57C0</li>
            <li>USDT: TPx7hqrfjoGTsae7tZBwQL659wf4FcKC8X</li>
        </ul>
    </div>

    <div class="plan">
        <h3>PLATINUM PLAN</h3>
        <ul>
            <li><span class="highlight">25% daily</span> for 12 days</li>
            <li>Min: $5000 | Max: No limit</li>
            <li>Referral Commission: 10%</li>
            <li>Duration: 12 days</li>
            <li>Profit Withdraw: Yes</li>
            <li>Btc: bc1qyg48uju7hmnds8c4qh679ug6dmlgmasddf02uw</li>
            <li>Eth: 0x1bD5FDEA71213CC5B9962F54de3E119A435A57C0</li>
            <li>USDT: TPx7hqrfjoGTsae7tZBwQL659wf4FcKC8X</li>
        </ul>
    </div>
</div>
@endsection