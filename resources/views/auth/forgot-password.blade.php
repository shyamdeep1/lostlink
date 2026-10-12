@extends('layouts.guest')

@section('title', 'Reset your password · LostLink')

@section('content')
	<section class="recovery-page">
		<div class="recovery-page__intro">
			<p class="home-kicker">A small reset</p>
			<h1>Let’s get you back to the things worth <em>finding.</em></h1>
			<p class="recovery-page__copy">Enter the email address connected to your LostLink account and we will help you find your way back in.</p>

			<div class="recovery-page__marker" aria-hidden="true">
				<span>01</span>
				<i></i>
				<strong>Take a breath.<br><em>Start again.</em></strong>
			</div>
		</div>

		<div class="recovery-card">
			<div class="recovery-card__heading">
				<p class="home-kicker">Forgot your password?</p>
				<h2>It happens.</h2>
				<p>We will send a reset link to your inbox.</p>
			</div>

			<form class="recovery-form" action="#" method="post" onsubmit="return false;">
				<label for="recovery-email">Email address</label>
				<input id="recovery-email" name="email" type="email" placeholder="jane@example.com" autocomplete="email">

				<button class="home-button home-button--dark" type="submit">Send reset link <span aria-hidden="true">&#8599;</span></button>
			</form>

			<p class="recovery-card__back"><a href="{{ url('/login') }}"><span aria-hidden="true">&#8592;</span> Back to sign in</a></p>
		</div>
	</section>
@endsection
