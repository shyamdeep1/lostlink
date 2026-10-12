@extends('layouts.app')

@section('content')
    <section class="profile-page">
        <div class="profile-page__header">
            <div class="profile-avatar" aria-hidden="true">J</div>
            <div class="profile-page__identity">
                <p class="home-kicker">Your profile</p>
                <h1>Jane <em>Smith.</em></h1>
                <p>Making good connections since October 2024.</p>
            </div>
            <a class="home-button home-button--dark" href="{{ url('/profile/edit') }}">Edit profile <span aria-hidden="true">&#8599;</span></a>
        </div>

        <div class="profile-page__grid">
            <section class="profile-card profile-card--details" aria-labelledby="profile-details-title">
                <div class="profile-card__heading">
                    <div>
                        <p class="home-kicker">About you</p>
                        <h2 id="profile-details-title">The details behind the profile.</h2>
                    </div>
                    <span class="profile-card__number">01</span>
                </div>
                <dl class="profile-details">
                    <div><dt>Full name</dt><dd>Jane Smith</dd></div>
                    <div><dt>Email address</dt><dd>jane.smith@example.com</dd></div>
                    <div><dt>Home area</dt><dd>Riverside district</dd></div>
                    <div><dt>Member since</dt><dd>October 2024</dd></div>
                </dl>
            </section>

            <section class="profile-card profile-card--stats" aria-labelledby="profile-stats-title">
                <div class="profile-card__heading">
                    <div>
                        <p class="home-kicker">Your impact</p>
                        <h2 id="profile-stats-title">Small actions add up.</h2>
                    </div>
                    <span class="profile-card__number">02</span>
                </div>
                <div class="profile-impact">
                    <div><strong>04</strong><span>Reports shared</span></div>
                    <div><strong>01</strong><span>Item returned</span></div>
                    <div><strong>12</strong><span>Helpful views</span></div>
                </div>
                <p class="profile-card__note"><span aria-hidden="true">&#10003;</span> You are helping make the search easier for someone else.</p>
            </section>

            <section class="profile-card profile-card--preferences" aria-labelledby="profile-preferences-title">
                <div class="profile-card__heading">
                    <div>
                        <p class="home-kicker">Preferences</p>
                        <h2 id="profile-preferences-title">How LostLink stays useful.</h2>
                    </div>
                    <span class="profile-card__number">03</span>
                </div>
                <div class="profile-preferences">
                    <label><span><strong>Report updates</strong><small>Let me know when something changes.</small></span><input type="checkbox" checked><i></i></label>
                    <label><span><strong>Possible matches</strong><small>Show me items that might connect.</small></span><input type="checkbox" checked><i></i></label>
                    <label><span><strong>Community notes</strong><small>Occasional news from LostLink.</small></span><input type="checkbox"><i></i></label>
                </div>
            </section>
        </div>

        <section class="profile-page__footer" aria-labelledby="profile-footer-title">
            <div>
                <p class="home-kicker">Keep going</p>
                <h2 id="profile-footer-title">Every report is a chance to help something find its way home.</h2>
            </div>
            <div class="profile-page__footer-actions">
                <a class="home-text-link" href="{{ url('/my-posts') }}">View my posts <span aria-hidden="true">&#8594;</span></a>
                <a class="home-button home-button--lime" href="{{ url('/report-found-item') }}">Report a found item <span aria-hidden="true">&#8599;</span></a>
            </div>
        </section>
    </section>
@endsection
