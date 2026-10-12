<nav class="site-nav" aria-label="Primary navigation">
	<div class="site-nav__inner">
		<a class="site-nav__brand" href="{{ url('/') }}" aria-label="LostLink home">
			<span class="site-nav__logo-wrap">
				<img class="site-nav__logo" src="{{ asset('images/website_logo.jpg') }}" alt="LostLink logo">
			</span>
			<span class="site-nav__wordmark">Lost<span>Link</span></span>
		</a>

		<button class="site-nav__toggle" type="button" aria-expanded="false" aria-controls="site-nav-menu">
			<span class="site-nav__toggle-line"></span>
			<span class="site-nav__toggle-line"></span>
			<span class="site-nav__toggle-line"></span>
			<span class="sr-only">Toggle navigation</span>
		</button>

		<div class="site-nav__menu" id="site-nav-menu">
			<div class="site-nav__links">
				<a class="site-nav__link {{ request()->is('/') ? 'site-nav__link--active' : '' }}" href="{{ url('/') }}">Home</a>
				<a class="site-nav__link {{ request()->is('about') ? 'site-nav__link--active' : '' }}" href="{{ url('/about') }}">About</a>
				<a class="site-nav__link {{ request()->is('contact') ? 'site-nav__link--active' : '' }}" href="{{ url('/contact') }}">Contact</a>
			</div>

			<div class="site-nav__actions">
				<x-language-switcher />
				<x-notification-dropdown />
				<a class="site-nav__signin" href="{{ url('/login') }}">Sign in</a>
				<a class="site-nav__cta" href="{{ url('/report-lost-item') }}">
					<span>Report an item</span>
					<span class="site-nav__cta-arrow" aria-hidden="true">&#8599;</span>
				</a>
			</div>
		</div>
	</div>
</nav>

<script>
	(() => {
		const toggle = document.querySelector('.site-nav__toggle');
		const menu = document.querySelector('#site-nav-menu');

		if (!toggle || !menu) return;

		toggle.addEventListener('click', () => {
			const isOpen = toggle.getAttribute('aria-expanded') === 'true';
			toggle.setAttribute('aria-expanded', String(!isOpen));
			menu.classList.toggle('site-nav__menu--open', !isOpen);
		});
	})();
</script>
