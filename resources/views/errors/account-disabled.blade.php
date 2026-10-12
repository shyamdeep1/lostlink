@extends('layouts.guest')

@section('title', 'Account disabled · LostLink')

@section('content')
    <main class="account-disabled-page">
        <section class="account-disabled-card" aria-labelledby="account-disabled-title">
            <div class="account-disabled-card__signal" aria-hidden="true">
                <span class="account-disabled-card__signal-ring"></span>
                <span class="account-disabled-card__signal-mark">!</span>
            </div>
            <p class="home-kicker">Access paused</p>
            <h1 id="account-disabled-title">Your account is currently <em>disabled.</em></h1>
            <p class="account-disabled-card__copy">You have been signed out because access to this LostLink account has been paused by an administrator.</p>

            <div class="account-disabled-card__notice">
                <span aria-hidden="true">&#8505;</span>
                <p>If you believe this happened by mistake, contact the LostLink team and include the email address connected to your account.</p>
            </div>

            <div class="account-disabled-card__actions">
                <a class="home-button home-button--dark" href="mailto:support@lostlink.test">Contact support <span aria-hidden="true">&#8599;</span></a>
                <a class="home-text-link" href="{{ url('/') }}">Return to home <span aria-hidden="true">&#8594;</span></a>
            </div>
            <p class="account-disabled-card__reference">Reference: LL-ACCOUNT-PAUSED</p>
        </section>
    </main>
@endsection
