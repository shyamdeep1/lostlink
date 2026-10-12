@extends('layouts.guest')

@section('title', 'Create an account · LostLink')

@section('content')
	<section class="register-page">
		<div class="register-page__intro">
			<p class="home-kicker">A good place to begin</p>
			<h1>Make finding things feel a little more <em>possible.</em></h1>
			<p class="register-page__copy">Create your LostLink account to report an item, keep track of your search, and help make the right connection.</p>

			<div class="register-page__quote">
				<span aria-hidden="true">“</span>
				<p>Every search starts with one small detail.</p>
			</div>
		</div>

		<div class="register-card">
			<div class="register-card__heading">
				<p class="home-kicker">Create your account</p>
				<h2>Welcome to LostLink.</h2>
				<p>It only takes a minute to get started.</p>
			</div>

			<form class="register-form" action="#" method="post" onsubmit="return false;">
				<label for="register-name">Full name</label>
				<input id="register-name" name="name" type="text" placeholder="Jane Smith" autocomplete="name">

				<label for="register-email">Email address</label>
				<input id="register-email" name="email" type="email" placeholder="jane@example.com" autocomplete="email">

				<label for="register-password">Create a password</label>
				<input id="register-password" name="password" type="password" placeholder="At least 8 characters" autocomplete="new-password">

				<label class="register-form__check" for="register-updates">
					<input id="register-updates" name="updates" type="checkbox">
					<span>Send me occasional updates from LostLink.</span>
				</label>

				<button class="home-button home-button--dark" type="submit">Create account <span aria-hidden="true">&#8599;</span></button>
			</form>

			<p class="register-card__signin">Already have an account? <a href="{{ url('/login') }}">Sign in <span aria-hidden="true">&#8594;</span></a></p>
		</div>
	</section>
@endsection
