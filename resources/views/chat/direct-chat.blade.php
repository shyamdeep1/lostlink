@extends('layouts.app')

@section('content')
    <section class="direct-chat-page">
        <a class="item-detail__back" href="{{ url('/items/1') }}"><span aria-hidden="true">&#8592;</span> Back to item report</a>

        <div class="direct-chat-page__heading">
            <div>
                <p class="home-kicker">Private conversation</p>
                <h1>One detail closer to <em>home.</em></h1>
                <p>Talk privately with the person connected to this report and work out a safe next step.</p>
            </div>
            <div class="direct-chat-page__secure"><span aria-hidden="true">&#10003;</span><strong>Private<br>room</strong><small>Only you two can see this.</small></div>
        </div>

        <div class="direct-chat-room">
            <aside class="direct-chat-room__profile">
                <div class="direct-chat-room__person"><div class="direct-chat-room__avatar">R</div><div><p class="home-kicker">Talking with</p><h2>Riya Patel</h2><span><i></i>Online now</span></div></div>
                <div class="direct-chat-room__item"><p class="home-kicker">About this report</p><strong>Blue canvas backpack</strong><span>Lost · Riverside station</span><a href="{{ url('/items/1') }}">View report <span aria-hidden="true">&#8594;</span></a></div>
                <div class="direct-chat-room__safety"><p class="home-kicker">Keep it safe</p><p>Do not share passwords, financial details, or your full address. Meet in a public place.</p></div>
            </aside>

            <section class="direct-chat-room__conversation" aria-label="Private chat with Riya Patel">
                <header class="direct-chat-room__header"><div><p class="home-kicker">Claim conversation</p><h2>Blue canvas backpack</h2></div><span class="direct-chat-room__secure-label"><span aria-hidden="true">&#128274;</span> Private</span></header>
                <div class="direct-chat-messages" data-direct-messages aria-live="polite">
                    <p class="direct-chat-messages__date">Today · 10:35 AM</p>
                    <div class="direct-chat-message direct-chat-message--received"><span class="direct-chat-message__avatar">R</span><div><strong>Riya <small>10:35 AM</small></strong><p>Hi Jane, I think I may have seen your backpack near platform two.</p></div></div>
                    <div class="direct-chat-message direct-chat-message--sent"><span class="direct-chat-message__avatar direct-chat-message__avatar--lime">J</span><div><strong>You <small>10:37 AM</small></strong><p>That sounds promising. It has a stitched sun patch on the front pocket.</p></div></div>
                    <div class="direct-chat-message direct-chat-message--received"><span class="direct-chat-message__avatar">R</span><div><strong>Riya <small>10:38 AM</small></strong><p>Yes, I remember that detail. I can leave it with the station desk if that feels safe.</p></div></div>
                </div>
                <form class="direct-chat-composer" data-direct-form><label class="sr-only" for="direct-message">Write a private message</label><input id="direct-message" type="text" placeholder="Write a private message..." autocomplete="off" data-direct-input><button type="submit" aria-label="Send private message">&#8593;</button></form>
                <p class="direct-chat-room__preview-note">Frontend preview · real-time messaging will connect later</p>
            </section>
        </div>
    </section>

    <script>
        (() => {
            const form = document.querySelector('[data-direct-form]');
            const input = document.querySelector('[data-direct-input]');
            const messages = document.querySelector('[data-direct-messages]');
            if (!form || !input || !messages) return;
            form.addEventListener('submit', (event) => {
                event.preventDefault();
                const message = input.value.trim();
                if (!message) return;
                const item = document.createElement('div');
                item.className = 'direct-chat-message direct-chat-message--sent';
                item.innerHTML = '<span class="direct-chat-message__avatar direct-chat-message__avatar--lime">J</span><div><strong>You <small>Just now</small></strong><p></p></div>';
                item.querySelector('p').textContent = message;
                messages.appendChild(item);
                input.value = '';
                messages.scrollTop = messages.scrollHeight;
            });
        })();
    </script>
@endsection
