<footer class="site-footer">
	<div class="site-footer__inner">
		<div class="site-footer__intro">
			<a class="site-footer__brand" href="{{ url('/') }}" aria-label="LostLink home">
				<span class="site-footer__logo-wrap">
					<img class="site-footer__logo" src="{{ asset('images/website_logo.jpg') }}" alt="LostLink logo">
				</span>
				<span class="site-footer__wordmark">Lost<span>Link</span></span>
			</a>
			<p>Helping lost things find their way home.</p>
		</div>

		<div class="site-footer__links" aria-label="Footer navigation">
			<div class="site-footer__column">
				<p class="site-footer__label">Explore</p>
				<a href="{{ url('/') }}">Home</a>
				<a href="{{ url('/about') }}">About</a>
				<a href="{{ url('/how-it-works') }}">How it works</a>
			</div>

			<div class="site-footer__column">
				<p class="site-footer__label">Get involved</p>
				<a href="{{ url('/report-lost-item') }}">Report an item</a>
				<a href="{{ url('/login') }}">Sign in</a>
				<a href="{{ url('/contact') }}">Contact us</a>
			</div>
		</div>
	</div>

	<div class="site-footer__bottom">
		<span>&copy; {{ date('Y') }} LostLink</span>
		<span>Made for the things worth finding.</span>
	</div>
</footer>
