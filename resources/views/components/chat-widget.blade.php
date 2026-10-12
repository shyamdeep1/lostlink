<div class="chat-widget" data-chat-widget>
	<button class="chat-widget__launcher" type="button" aria-expanded="false" aria-controls="chat-panel">
		<span class="chat-widget__launcher-icon" aria-hidden="true">&#9993;</span>
		<span class="chat-widget__launcher-label">Need a hand?</span>
		<span class="chat-widget__launcher-close" aria-hidden="true">&#10005;</span>
	</button>

	<section class="chat-widget__panel" id="chat-panel" aria-label="LostLink chat" hidden>
		<header class="chat-widget__header">
			<div class="chat-widget__avatar" aria-hidden="true">L</div>
			<div>
				<p class="chat-widget__eyebrow">LostLink support</p>
				<h2>How can we help?</h2>
			</div>
			<span class="chat-widget__online"><i></i>Online</span>
		</header>

		<div class="chat-widget__messages" data-chat-messages aria-live="polite">
			<p class="chat-widget__date">Today</p>
			<div class="chat-widget__message chat-widget__message--received">
				<p>Hi there. Looking for something that went missing?</p>
				<time>Just now</time>
			</div>
			<div class="chat-widget__message chat-widget__message--received">
				<p>Tell us what you need and we will point you in the right direction.</p>
				<time>Just now</time>
			</div>
		</div>

		<form class="chat-widget__form" data-chat-form>
			<label class="sr-only" for="chat-message">Write a message</label>
			<input id="chat-message" type="text" placeholder="Write a message..." autocomplete="off" data-chat-input>
			<button type="submit" aria-label="Send message">&#8593;</button>
		</form>
		<div class="chat-widget__footer-links"><p class="chat-widget__note">Frontend preview · replies will connect later</p><span><a href="{{ url('/group-chat') }}">Open full chat <span aria-hidden="true">&#8594;</span></a><a href="{{ url('/direct-chat') }}">Message a reporter <span aria-hidden="true">&#8594;</span></a></span></div>
	</section>
</div>

<script>
	(() => {
		const widget = document.querySelector('[data-chat-widget]');
		if (!widget) return;

		const launcher = widget.querySelector('.chat-widget__launcher');
		const panel = widget.querySelector('.chat-widget__panel');
		const form = widget.querySelector('[data-chat-form]');
		const input = widget.querySelector('[data-chat-input]');
		const messages = widget.querySelector('[data-chat-messages]');

		launcher.addEventListener('click', () => {
			const isOpen = launcher.getAttribute('aria-expanded') === 'true';
			launcher.setAttribute('aria-expanded', String(!isOpen));
			panel.hidden = isOpen;
			if (!isOpen) input.focus();
		});

		form.addEventListener('submit', (event) => {
			event.preventDefault();
			const message = input.value.trim();
			if (!message) return;

			const item = document.createElement('div');
			item.className = 'chat-widget__message chat-widget__message--sent';
			item.innerHTML = `<p></p><time>Just now</time>`;
			item.querySelector('p').textContent = message;
			messages.appendChild(item);
			input.value = '';
			messages.scrollTop = messages.scrollHeight;
		});

		document.addEventListener('click', (event) => {
			if (!widget.contains(event.target)) {
				launcher.setAttribute('aria-expanded', 'false');
				panel.hidden = true;
			}
		});
	})();
</script>
