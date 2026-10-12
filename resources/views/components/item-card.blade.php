@props([
	'title' => 'Blue canvas backpack',
	'status' => 'lost',
	'category' => 'Personal item',
	'location' => 'Riverside station',
	'date' => 'Today',
	'image' => null,
	'href' => '#',
])

@php
	$status = strtolower($status) === 'found' ? 'found' : 'lost';
	$statusLabel = ucfirst($status);
@endphp

<article class="item-card item-card--{{ $status }}">
	<a class="item-card__link" href="{{ $href }}" aria-label="View {{ $statusLabel }} item: {{ $title }}">
		<div class="item-card__image-wrap">
			@if ($image)
				<img class="item-card__image" src="{{ $image }}" alt="{{ $title }}">
			@else
				<div class="item-card__placeholder" aria-hidden="true">
					<span class="item-card__placeholder-shape"></span>
					<span class="item-card__placeholder-line"></span>
					<span class="item-card__placeholder-label">Image<br>coming soon</span>
				</div>
			@endif
			<span class="item-card__status">{{ $statusLabel }}</span>
			<span class="item-card__arrow" aria-hidden="true">&#8599;</span>
		</div>

		<div class="item-card__body">
			<p class="item-card__category">{{ $category }}</p>
			<h3>{{ $title }}</h3>
			<div class="item-card__meta">
				<span><b aria-hidden="true">&#9906;</b>{{ $location }}</span>
				<time>{{ $date }}</time>
			</div>
		</div>
	</a>
</article>
