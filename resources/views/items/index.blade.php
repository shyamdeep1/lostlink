@extends('layouts.app')

@section('content')
	<section class="items-hero">
		<div>
			<p class="home-kicker">The community board</p>
			<h1>Find what is still <em>looking for home.</em></h1>
			<p class="items-hero__copy">Browse lost and found reports from people nearby. A useful detail can make all the difference.</p>
		</div>
		<div class="items-hero__count" aria-label="Current report count">
			<strong>128</strong>
			<span>active reports<br>and counting</span>
		</div>
	</section>

	<section class="items-browser" aria-labelledby="items-browser-title">
		<div class="items-browser__topline">
			<div>
				<p class="home-kicker">Browse reports</p>
				<h2 id="items-browser-title">Every search starts somewhere.</h2>
			</div>
			<span class="items-browser__result-count" data-result-count>6 reports</span>
		</div>

		<div class="items-toolbar">
			<label class="items-search" for="items-search">
				<span aria-hidden="true">&#9906;</span>
				<input id="items-search" type="search" placeholder="Search by item or place" data-items-search>
			</label>
			<div class="items-filter-group" role="group" aria-label="Filter reports by status">
				<button class="items-filter items-filter--active" type="button" data-items-filter="all">All</button>
				<button class="items-filter" type="button" data-items-filter="lost">Lost</button>
				<button class="items-filter" type="button" data-items-filter="found">Found</button>
			</div>
			<label class="items-sort" for="items-sort">
				<span>Sort</span>
				<select id="items-sort">
					<option>Most recent</option>
					<option>Nearest first</option>
					<option>Oldest first</option>
				</select>
			</label>
		</div>

		<div class="items-grid" data-items-grid>
			<div class="items-grid__entry" data-item-status="lost" data-item-search="blue canvas backpack personal item riverside station">
				<x-item-card title="Blue canvas backpack" status="lost" category="Personal item" location="Riverside station" date="Today" />
			</div>
			<div class="items-grid__entry" data-item-status="found" data-item-search="black leather wallet accessories city library">
				<x-item-card title="Black leather wallet" status="found" category="Accessories" location="City library" date="Today" />
			</div>
			<div class="items-grid__entry" data-item-status="lost" data-item-search="red water bottle everyday market street">
				<x-item-card title="Red water bottle" status="lost" category="Everyday item" location="Market street" date="Yesterday" />
			</div>
			<div class="items-grid__entry" data-item-status="found" data-item-search="silver keyring keys north park entrance">
				<x-item-card title="Silver keyring" status="found" category="Keys" location="North park entrance" date="Yesterday" />
			</div>
			<div class="items-grid__entry" data-item-status="lost" data-item-search="green scarf clothing riverside cafe">
				<x-item-card title="Green wool scarf" status="lost" category="Clothing" location="Riverside cafe" date="Mon, 14 Oct" />
			</div>
			<div class="items-grid__entry" data-item-status="found" data-item-search="wireless earbuds technology central bus stop">
				<x-item-card title="Wireless earbuds" status="found" category="Technology" location="Central bus stop" date="Mon, 14 Oct" />
			</div>
		</div>

		<div class="items-empty" data-items-empty hidden>
			<span aria-hidden="true">&#9906;</span>
			<h3>No reports found yet.</h3>
			<p>Try a different item, place, or status.</p>
		</div>

		<div class="items-browser__bottom">
			<p>Showing the latest community reports</p>
			<a class="home-button home-button--dark" href="{{ url('/report-lost-item') }}">Report an item <span aria-hidden="true">&#8599;</span></a>
		</div>
	</section>

	<script>
		(() => {
			const page = document.querySelector('.items-browser');
			if (!page) return;

			const search = page.querySelector('[data-items-search]');
			const filters = page.querySelectorAll('[data-items-filter]');
			const entries = page.querySelectorAll('.items-grid__entry');
			const empty = page.querySelector('[data-items-empty]');
			const count = page.querySelector('[data-result-count]');
			let activeFilter = 'all';

			const updateResults = () => {
				const query = search.value.toLowerCase().trim();
				let visible = 0;

				entries.forEach((entry) => {
					const matchesFilter = activeFilter === 'all' || entry.dataset.itemStatus === activeFilter;
					const matchesSearch = !query || entry.dataset.itemSearch.includes(query);
					const shouldShow = matchesFilter && matchesSearch;
					entry.hidden = !shouldShow;
					if (shouldShow) visible += 1;
				});

				empty.hidden = visible !== 0;
				count.textContent = `${visible} ${visible === 1 ? 'report' : 'reports'}`;
			};

			search.addEventListener('input', updateResults);
			filters.forEach((filter) => {
				filter.addEventListener('click', () => {
					activeFilter = filter.dataset.itemsFilter;
					filters.forEach((item) => item.classList.toggle('items-filter--active', item === filter));
					updateResults();
				});
			});
		})();
	</script>
@endsection
