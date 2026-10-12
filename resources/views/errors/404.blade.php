@extends('layouts.app')

@section('title', 'Page not found · LostLink')

@section('content')
    <main class="not-found-page">
        <section class="not-found-card" aria-labelledby="not-found-title">
            <div class="not-found-card__number" aria-hidden="true"><span>4</span><strong>0</strong><span>4</span></div>
            <p class="home-kicker">A wrong turn</p>
            <h1 id="not-found-title">This page seems to be <em>lost.</em></h1>
            <p class="not-found-card__copy">The link may have moved, or the page you are looking for may no longer be here. Let’s get you back to something useful.</p>

            <div class="not-found-card__path" aria-hidden="true">
                <span class="not-found-card__path-dot"></span>
                <span class="not-found-card__path-line"></span>
                <span class="not-found-card__path-dot not-found-card__path-dot--end"></span>
            </div>

            <div class="not-found-card__actions">
                <a class="home-button home-button--dark" href="{{ url('/') }}">Back to home <span aria-hidden="true">&#8599;</span></a>
                <a class="home-text-link" href="{{ url('/items') }}">Browse reports <span aria-hidden="true">&#8594;</span></a>
            </div>
            <p class="not-found-card__reference">Error 404 · LostLink</p>
        </section>
    </main>
@endsection
