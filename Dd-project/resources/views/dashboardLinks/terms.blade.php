@extends('layouts.app')
@vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
@section('content')
<div class="terms-container">
    <h2>Rules & Agreements</h2>
    <p>
        Please read the following rules carefully before signing in. You agree to be of legal age in your country to partake in this program, 
        and in all cases, your minimum age must be <span class="highlight">18 years.</span>
    </p>
    <p>
        <span class="highlight">Return Arena</span> is not available to the general public and is open only to qualified members. 
        The use of this site is restricted to our members and individuals personally invited by them. Every deposit is considered a private 
        transaction between Return Arena and its Member.
    </p>
    <p>
        As a private transaction, this program is exempt from:
    </p>
    <ul>
        <li>The <span class="highlight">US Securities Act of 1933</span></li>
        <li>The <span class="highlight">US Securities Exchange Act of 1934</span></li>
        <li>The <span class="highlight">US Investment Company Act of 1940</span></li>
        <li>All other rules, regulations, and amendments thereof</li>
    </ul>
    <p>
        <span class="highlight">We are not FDIC insured.</span> We are not a licensed bank or a security firm.
    </p>
</div>
@endsection