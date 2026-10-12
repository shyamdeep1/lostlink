@extends('layouts.app')

@section('content')
    <section class="home-hero">
        <div class="home-hero__content">
            <p class="home-kicker">A little help finding what matters</p>
            <h1>Lost things deserve a way <em>home.</em></h1>
            <p class="home-hero__copy">LostLink brings people and their missing belongings back together through one simple, thoughtful place.</p>
            <div class="home-hero__actions">
                <a class="home-button home-button--dark" href="{{ url('/report-lost-item') }}">Report a lost item <span aria-hidden="true">&#8599;</span></a>
                <a class="home-text-link" href="{{ url('/how-it-works') }}">See how it works <span aria-hidden="true">&#8594;</span></a>
            </div>
        </div>

        <div class="home-hero__visual" aria-label="LostLink connection illustration">
            <div class="home-hero__orb home-hero__orb--large"></div>
            <div class="home-hero__orb home-hero__orb--small"></div>
            <span class="home-hero__pin home-hero__pin--one">&#9679;</span>
            <span class="home-hero__pin home-hero__pin--two">&#9679;</span>
            <span class="home-hero__line home-hero__line--one"></span>
            <span class="home-hero__line home-hero__line--two"></span>
            <div class="home-hero__note">
                <span class="home-hero__note-icon">&#10003;</span>
                <span><strong>Connection made</strong><small>Good things find their way.</small></span>
            </div>
            <div class="home-hero__tag">Keep looking<br><strong>there is a way</strong></div>
        </div>
    </section>

    <section class="home-discovery" aria-labelledby="discovery-title">
        <div class="home-section-heading">
            <p class="home-kicker">Start here</p>
            <h2 id="discovery-title">What are you looking for?</h2>
        </div>
        <div class="home-discovery__panel">
            <label class="home-search" for="item-search">
                <span aria-hidden="true">&#9906;</span>
                <input id="item-search" type="text" placeholder="Search by item, place, or keyword" readonly>
            </label>
            <a class="home-button home-button--lime" href="{{ url('/items') }}">Browse reports <span aria-hidden="true">&#8599;</span></a>
        </div>
    </section>

    <section class="home-proof" aria-label="LostLink highlights">
        <div><strong>01</strong><span>One place to begin</span></div>
        <div><strong>24/7</strong><span>Always open to help</span></div>
        <div><strong>100%</strong><span>Built around people</span></div>
    </section>

    <section class="home-steps" aria-labelledby="steps-title">
        <div class="home-section-heading home-section-heading--wide">
            <p class="home-kicker">Simple by design</p>
            <h2 id="steps-title">From lost to found, one step at a time.</h2>
        </div>
        <div class="home-steps__grid">
            <article class="home-step">
                <span class="home-step__number">01</span>
                <h3>Tell us what happened</h3>
                <p>Share the details you remember so your item has the best chance of being recognised.</p>
            </article>
            <article class="home-step">
                <span class="home-step__number">02</span>
                <h3>Look through local reports</h3>
                <p>Explore items already reported by people nearby and spot the connection.</p>
            </article>
            <article class="home-step">
                <span class="home-step__number">03</span>
                <h3>Make the right connection</h3>
                <p>When something lines up, take the next step toward bringing it home.</p>
            </article>
        </div>
    </section>
@endsection