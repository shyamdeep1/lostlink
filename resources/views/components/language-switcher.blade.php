<div class="language-switcher" data-language-switcher>
	<button class="language-switcher__button" type="button" aria-expanded="false" aria-controls="language-switcher-menu">
		<span class="language-switcher__globe" aria-hidden="true">&#9673;</span>
		<span data-language-current>English</span>
		<span class="language-switcher__chevron" aria-hidden="true">&#8595;</span>
	</button>

	<div class="language-switcher__menu" id="language-switcher-menu" role="menu" hidden>
		<button type="button" role="menuitem" data-language="en" data-language-label="English" aria-pressed="true">English</button>
		<button type="button" role="menuitem" data-language="hi" data-language-label="हिन्दी" aria-pressed="false">हिन्दी</button>
		<button type="button" role="menuitem" data-language="gu" data-language-label="ગુજરાતી" aria-pressed="false">ગુજરાતી</button>
	</div>
</div>

<script>
	(() => {
		const switcher = document.querySelector('[data-language-switcher]');
		if (!switcher) return;

		const button = switcher.querySelector('.language-switcher__button');
		const menu = switcher.querySelector('.language-switcher__menu');
		const current = switcher.querySelector('[data-language-current]');
		const options = switcher.querySelectorAll('[data-language]');
		const storageKey = 'lostlink-language';

		const setLanguage = (language, label) => {
			document.documentElement.lang = language;
			current.textContent = label;
			options.forEach((option) => {
				option.setAttribute('aria-pressed', String(option.dataset.language === language));
			});
			try {
				localStorage.setItem(storageKey, language);
			} catch (error) {
				// Storage can be unavailable in private browsing; the visual state still works.
			}
		};

		const closeMenu = () => {
			button.setAttribute('aria-expanded', 'false');
			menu.hidden = true;
		};

		button.addEventListener('click', () => {
			const isOpen = button.getAttribute('aria-expanded') === 'true';
			button.setAttribute('aria-expanded', String(!isOpen));
			menu.hidden = isOpen;
		});

		options.forEach((option) => {
			option.addEventListener('click', () => {
				setLanguage(option.dataset.language, option.dataset.languageLabel);
				closeMenu();
			});
		});

		document.addEventListener('click', (event) => {
			if (!switcher.contains(event.target)) closeMenu();
		});

		try {
			const savedLanguage = localStorage.getItem(storageKey);
			const savedOption = switcher.querySelector(`[data-language="${savedLanguage}"]`);
			if (savedOption) setLanguage(savedLanguage, savedOption.dataset.languageLabel);
		} catch (error) {
			// Keep English as the default when storage is unavailable.
		}
	})();
</script>
