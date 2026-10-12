@extends('layouts.guest')

@section('title', 'Sign in · LostLink')

@section('content')
	<section class="login-page">
		<div class="login-page__intro">
			<p class="home-kicker">Good to see you again</p>
			<h1>Keep the search moving <em>forward.</em></h1>
			<p class="login-page__copy">Sign in to keep track of your reports, revisit the details, and stay close to the things worth finding.</p>

			<div class="login-page__signal" aria-hidden="true">
				<span class="login-page__signal-dot"></span>
				<span class="login-page__signal-line"></span>
				<span class="login-page__signal-dot login-page__signal-dot--end"></span>
				<strong>Still looking<br><em>still hopeful</em></strong>
			</div>
		</div>

		<div class="login-card">
			<div class="login-card__heading">
				<p class="home-kicker">Sign in</p>
				<h2>Welcome back.</h2>
				<p>Pick up where you left off.</p>
			</div>

			<form class="login-form" action="#" method="post" onsubmit="return false;">
				<label for="login-email">Email address</label>
				<input id="login-email" name="email" type="email" placeholder="jane@example.com" autocomplete="email">

				<div class="login-form__password-label">
					<label for="login-password">Password</label>
					<a href="{{ url('/forgot-password') }}">Forgot password?</a>
				</div>
				<input id="login-password" name="password" type="password" placeholder="Enter your password" autocomplete="current-password">

				<label class="login-form__check" for="login-remember">
					<input id="login-remember" name="remember" type="checkbox">
					<span>Keep me signed in</span>
				</label>

				<button class="home-button home-button--dark" type="submit">Sign in <span aria-hidden="true">&#8599;</span></button>
			</form>

			<p class="login-card__register">New to LostLink? <a href="{{ url('/register') }}">Create an account <span aria-hidden="true">&#8594;</span></a></p>
		</div>
	</section>
@endsection
