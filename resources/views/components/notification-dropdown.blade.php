<div class="notification-dropdown" data-notification-dropdown>
	<button class="notification-dropdown__toggle" type="button" aria-expanded="false" aria-controls="notification-menu" aria-label="Notifications">
		<span class="notification-dropdown__bell" aria-hidden="true">&#128276;</span>
		<span class="notification-dropdown__badge" data-notification-count>3</span>
	</button>

	<div class="notification-dropdown__menu" id="notification-menu" hidden>
		<div class="notification-dropdown__header">
			<div>
				<p class="notification-dropdown__eyebrow">Your updates</p>
				<h2>Notifications</h2>
			</div>
			<button class="notification-dropdown__read-all" type="button" data-mark-notifications-read>Mark all read</button>
		</div>

		<div class="notification-dropdown__list">
			<a class="notification-dropdown__item notification-dropdown__item--unread" href="#">
				<span class="notification-dropdown__icon" aria-hidden="true">&#10003;</span>
				<span class="notification-dropdown__content"><strong>A possible match was found</strong><small>Blue canvas backpack · 5 min ago</small></span>
				<span class="notification-dropdown__dot" aria-hidden="true"></span>
			</a>
			<a class="notification-dropdown__item notification-dropdown__item--unread" href="#">
				<span class="notification-dropdown__icon" aria-hidden="true">&#9733;</span>
				<span class="notification-dropdown__content"><strong>Your report is live</strong><small>Black wallet · 1 hour ago</small></span>
				<span class="notification-dropdown__dot" aria-hidden="true"></span>
			</a>
			<a class="notification-dropdown__item notification-dropdown__item--unread" href="#">
				<span class="notification-dropdown__icon" aria-hidden="true">&#8599;</span>
				<span class="notification-dropdown__content"><strong>Someone viewed your report</strong><small>Red water bottle · Yesterday</small></span>
				<span class="notification-dropdown__dot" aria-hidden="true"></span>
			</a>
		</div>

		<div class="notification-dropdown__footer">
			<a href="#">View all activity <span aria-hidden="true">&#8594;</span></a>
		</div>
	</div>
</div>

<script>
	(() => {
		const dropdown = document.querySelector('[data-notification-dropdown]');
		if (!dropdown) return;

		const toggle = dropdown.querySelector('.notification-dropdown__toggle');
		const menu = dropdown.querySelector('.notification-dropdown__menu');
		const count = dropdown.querySelector('[data-notification-count]');
		const readAll = dropdown.querySelector('[data-mark-notifications-read]');
		const unreadItems = dropdown.querySelectorAll('.notification-dropdown__item--unread');

		const closeMenu = () => {
			toggle.setAttribute('aria-expanded', 'false');
			menu.hidden = true;
		};

		toggle.addEventListener('click', () => {
			const isOpen = toggle.getAttribute('aria-expanded') === 'true';
			toggle.setAttribute('aria-expanded', String(!isOpen));
			menu.hidden = isOpen;
		});

		readAll.addEventListener('click', () => {
			unreadItems.forEach((item) => {
				item.classList.remove('notification-dropdown__item--unread');
				item.querySelector('.notification-dropdown__dot')?.remove();
			});
			count.hidden = true;
		});

		document.addEventListener('click', (event) => {
			if (!dropdown.contains(event.target)) closeMenu();
		});
	})();
</script>
