@extends('layouts.app')

@section('content')
    <section class="group-chat-page">
        <div class="group-chat-page__heading">
            <div>
                <p class="home-kicker">The LostLink room</p>
                <h1>Find the right words, <em>together.</em></h1>
                <p>Ask questions, share useful details, and help your community turn lost moments into good endings.</p>
            </div>
            <div class="group-chat-page__status"><i></i><strong>24</strong><span>people here<br>right now</span></div>
        </div>

        <div class="group-chat-room">
            <aside class="group-chat-room__sidebar">
                <div class="group-chat-room__room-title"><span class="group-chat-room__room-icon" aria-hidden="true">&#10003;</span><div><p class="home-kicker">Room</p><h2>General help</h2></div></div>
                <p class="group-chat-room__description">A friendly place to ask about lost and found items near you.</p>
                <div class="group-chat-room__members"><span>24 active members</span><div class="group-chat-room__avatars"><i>R</i><i>M</i><i>A</i><i>+</i></div></div>
                <div class="group-chat-room__guidance"><p class="home-kicker">Keep it thoughtful</p><ul><li>Protect private details.</li><li>Meet in public places.</li><li>Trust your instincts.</li></ul></div>
                <a class="group-chat-room__back" href="{{ url('/dashboard') }}"><span aria-hidden="true">&#8592;</span> Back to dashboard</a>
            </aside>

            <section class="group-chat-room__conversation" aria-label="General help group chat">
                <header class="group-chat-room__header"><div><p class="home-kicker">Community conversation</p><h2>General help</h2></div><span class="group-chat-room__online"><i></i>Live room</span></header>
                <div class="group-chat-messages" data-group-messages aria-live="polite">
                    <p class="group-chat-messages__date">Today · 10:24 AM</p>
                    <div class="group-chat-message"><span class="group-chat-message__avatar">R</span><div><strong>Riya <small>10:24 AM</small></strong><p>Has anyone seen a blue backpack around Riverside station this morning?</p></div></div>
                    <div class="group-chat-message"><span class="group-chat-message__avatar group-chat-message__avatar--green">M</span><div><strong>Marco <small>10:26 AM</small></strong><p>I was there around nine. I noticed one near the east entrance, close to platform two.</p></div></div>
                    <div class="group-chat-message group-chat-message--mine"><span class="group-chat-message__avatar group-chat-message__avatar--lime">J</span><div><strong>You <small>10:29 AM</small></strong><p>That sounds like the one I reported. Thank you for the detail.</p></div></div>
                    <div class="group-chat-message"><span class="group-chat-message__avatar">A</span><div><strong>Alex <small>10:31 AM</small></strong><p>Hope it finds its way back. Keeping an eye out here too.</p></div></div>
                </div>
                <form class="group-chat-composer" data-group-form><label class="sr-only" for="group-message">Write a message</label><input id="group-message" type="text" placeholder="Write to the room..." autocomplete="off" data-group-input><button type="submit" aria-label="Send message">&#8593;</button></form>
                <p class="group-chat-room__preview-note">Frontend preview · Socket.IO connection will be added later</p>
            </section>
        </div>
    </section>

    <script>
        (() => {
            const form = document.querySelector('[data-group-form]');
            const input = document.querySelector('[data-group-input]');
            const messages = document.querySelector('[data-group-messages]');
            if (!form || !input || !messages) return;
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                const message = input.value.trim();
                if (!message) return;
                const item = document.createElement('div');
                item.className = 'group-chat-message group-chat-message--mine';
                item.innerHTML = '<span class="group-chat-message__avatar group-chat-message__avatar--lime">J</span><div><strong>You <small>Just now</small></strong><p></p></div>';
                item.querySelector('p').textContent = message;
                messages.appendChild(item);
                input.value = '';
                messages.scrollTop = messages.scrollHeight;
            });
        })();
    </script>
@endsection
