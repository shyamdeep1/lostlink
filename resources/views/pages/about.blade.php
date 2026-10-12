@extends('layouts.app')

@section('content')
	<section class="story-hero">
		<div class="story-hero__content">
			<p class="home-kicker">The idea behind LostLink</p>
			<h1>A better way to bring the right things <em>back together.</em></h1>
			<p class="story-hero__copy">LostLink is a thoughtful place for lost belongings and the people who still care enough to look for them.</p>
		</div>
		<div class="story-hero__stamp" aria-hidden="true">
			<span>FOUND</span>
			<strong>with a little help</strong>
			<small>since day one</small>
		</div>
	</section>

	<section class="story-intro" aria-labelledby="story-intro-title">
		<p class="home-kicker">Why we are here</p>
		<div class="story-intro__grid">
			<h2 id="story-intro-title">Because a small lost thing can hold a very big story.</h2>
			<div>
				<p>We made LostLink for the moments that happen after the initial panic: the retracing, the asking around, and the quiet hope that someone found what you lost.</p>
				<p>Our goal is simple. Make it easier for people to share useful details, notice a familiar item, and create a good connection without adding more noise.</p>
			</div>
		</div>
	</section>

	<section class="story-values" aria-labelledby="values-title">
		<div class="story-values__heading">
			<p class="home-kicker">What guides us</p>
			<h2 id="values-title">Useful, human, and made to get out of the way.</h2>
		</div>
		<div class="story-values__grid">
			<article>
				<span>01</span>
				<h3>Clarity first</h3>
				<p>Good details make good matches. We keep the experience focused on what helps.</p>
			</article>
			<article>
				<span>02</span>
				<h3>People matter</h3>
				<p>Every report represents a person, a memory, and something worth treating with care.</p>
			</article>
			<article>
				<span>03</span>
				<h3>Small steps count</h3>
				<p>A shared post or a second look can be all it takes to change the ending.</p>
			</article>
		</div>
	</section>

	<section class="story-cta">
		<div>
			<p class="home-kicker">Start somewhere</p>
			<h2>Ready to help something find its way home?</h2>
		</div>
		<a class="home-button home-button--lime" href="{{ url('/report-lost-item') }}">Report an item <span aria-hidden="true">&#8599;</span></a>
	</section>
@endsection
