@extends('layouts.app')

@section('content')
    <section class="item-detail-hero">
        <a class="item-detail__back" href="{{ url('/items') }}"><span aria-hidden="true">&#8592;</span> Back to all reports</a>

        <div class="item-detail__layout">
            <div class="item-detail__visual">
                <div class="item-detail__placeholder" aria-label="Photo coming soon">
                    <span class="item-detail__placeholder-shape"></span>
                    <span class="item-detail__placeholder-line"></span>
                    <span class="item-detail__placeholder-label">Photo<br>coming soon</span>
                </div>
                <span class="item-detail__status">Lost item</span>
                <span class="item-detail__photo-note">Reported today</span>
            </div>

            <div class="item-detail__content">
                <p class="home-kicker">Personal item · Lost report</p>
                <h1>Blue canvas <em>backpack</em></h1>
                <p class="item-detail__summary">A blue canvas backpack that was last seen near Riverside station. It has a small stitched sun patch on the front pocket.</p>

                <div class="item-detail__facts">
                    <div><span>Last seen</span><strong>Riverside station</strong><small>Platform 2, near the east entrance</small></div>
                    <div><span>When</span><strong>Today, 9:40 AM</strong><small>Reported a few hours ago</small></div>
                    <div><span>Details</span><strong>Blue canvas</strong><small>Stitched sun patch · medium size</small></div>
                </div>

                <div class="item-detail__actions">
                    <button class="home-button home-button--dark" type="button" data-claim-open>Claim this item <span aria-hidden="true">&#8599;</span></button>
                    <button class="item-detail__share" type="button" data-share-item><span aria-hidden="true">&#8599;</span> Share report</button>
                </div>

                <p class="item-detail__updated">Report LL-00128 <span aria-hidden="true">·</span> Updated today</p>
            </div>
        </div>
    </section>

    <section class="item-detail-note" aria-label="Claiming guidance">
        <div class="item-detail-note__icon" aria-hidden="true">&#10003;</div>
        <div>
            <p class="home-kicker">A thoughtful next step</p>
            <h2>Know this item? Share a detail only the owner would know.</h2>
        </div>
        <p>We will help you start a safe conversation with the person who reported it. Never share sensitive information publicly.</p>
    </section>

    <div class="claim-modal" data-claim-modal hidden>
        <div class="claim-modal__backdrop" data-claim-close></div>
        <section class="claim-modal__panel" role="dialog" aria-modal="true" aria-labelledby="claim-title">
            <button class="claim-modal__close" type="button" aria-label="Close claim form" data-claim-close>&#10005;</button>
            <p class="home-kicker">Private claim request</p>
            <h2 id="claim-title">Think this is yours?</h2>
            <p>Share a little context and the reporter can follow up with you. Your message is not public.</p>
            <form class="claim-modal__form" action="#" method="post" onsubmit="return false;">
                <label for="claim-name">Your name</label>
                <input id="claim-name" type="text" placeholder="Jane Smith">
                <label for="claim-message">A detail that helps identify it</label>
                <textarea id="claim-message" rows="4" placeholder="Tell us something private about the item..."></textarea>
                <button class="home-button home-button--dark" type="submit">Send claim request <span aria-hidden="true">&#8599;</span></button>
            </form>
        </section>
    </div>

    <script>
        (() => {
            const openButton = document.querySelector('[data-claim-open]');
            const modal = document.querySelector('[data-claim-modal]');
            const closeButtons = document.querySelectorAll('[data-claim-close]');
            const shareButton = document.querySelector('[data-share-item]');
            if (!openButton || !modal) return;

            const closeModal = () => {
                modal.hidden = true;
                document.body.classList.remove('claim-modal-open');
            };

            openButton.addEventListener('click', () => {
                modal.hidden = false;
                document.body.classList.add('claim-modal-open');
                modal.querySelector('input').focus();
            });

            closeButtons.forEach((button) => button.addEventListener('click', closeModal));
            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && !modal.hidden) closeModal();
            });

            shareButton?.addEventListener('click', async () => {
                try {
                    await navigator.clipboard.writeText(window.location.href);
                    shareButton.innerHTML = '<span aria-hidden="true">&#10003;</span> Link copied';
                } catch (error) {
                    shareButton.innerHTML = '<span aria-hidden="true">&#8599;</span> Copy link';
                }
            });
        })();
    </script>
@endsection
