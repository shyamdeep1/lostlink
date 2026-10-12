@extends('layouts.app')

@section('content')
	<section class="contact-hero">
		<div>
			<p class="home-kicker">We would love to hear from you</p>
			<h1>Let’s start a <em>conversation.</em></h1>
			<p class="contact-hero__copy">Have a question, a suggestion, or a story about something that found its way home? Send us a note.</p>
		</div>
		<div class="contact-hero__mark" aria-hidden="true">↗</div>
	</section>

	<section class="contact-body" aria-labelledby="contact-form-title">
		<div class="contact-details">
			<p class="home-kicker">Say hello</p>
			<h2>There is a real person on the other side.</h2>
			<p>We are here for questions about LostLink, feedback on your experience, and ideas for making the search a little easier.</p>
			<a class="contact-email" href="mailto:hello@lostlink.test">hello@lostlink.test <span aria-hidden="true">&#8599;</span></a>
			<div class="contact-note">
				<span>01</span>
				<p>We aim to reply within one working day.</p>
			</div>
		</div>

		<form class="contact-form" action="#" method="post" onsubmit="return false;">
			<p class="home-kicker" id="contact-form-title">Send a note</p>
			<label for="contact-name">Your name</label>
			<input id="contact-name" name="name" type="text" placeholder="Jane Smith">
			<label for="contact-email">Email address</label>
			<input id="contact-email" name="email" type="email" placeholder="jane@example.com">
			<label for="contact-message">What is on your mind?</label>
			<textarea id="contact-message" name="message" rows="5" placeholder="Tell us a little more..."></textarea>
			<button class="home-button home-button--dark" type="submit">Send message <span aria-hidden="true">&#8599;</span></button>
		</form>
	</section>
@endsection
