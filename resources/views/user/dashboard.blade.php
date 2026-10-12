@extends('layouts.app')

@section('content')
    <section class="dashboard-page">
        <div class="dashboard-heading">
            <div>
                <p class="home-kicker">Your LostLink space</p>
                <h1>Good morning, <em>Jane.</em></h1>
                <p>Keep an eye on your reports and stay close to the things worth finding.</p>
            </div>
            <a class="home-button home-button--dark" href="{{ url('/report-lost-item') }}">Report an item <span aria-hidden="true">&#8599;</span></a>
        </div>

        <div class="dashboard-stats" aria-label="Your report summary">
            <div class="dashboard-stat dashboard-stat--highlight">
                <span>Active reports</span>
                <strong>03</strong>
                <small>Still looking for a match</small>
            </div>
            <div class="dashboard-stat">
                <span>Possible matches</span>
                <strong>02</strong>
                <small>Worth taking a closer look</small>
            </div>
            <div class="dashboard-stat">
                <span>Items returned</span>
                <strong>01</strong>
                <small>A good connection made</small>
            </div>
        </div>

        <div class="dashboard-main-grid">
            <section class="dashboard-reports" aria-labelledby="dashboard-reports-title">
                <div class="dashboard-section-heading">
                    <div>
                        <p class="home-kicker">Your reports</p>
                        <h2 id="dashboard-reports-title">Things you are looking for.</h2>
                    </div>
                    <a href="{{ url('/items') }}">View all <span aria-hidden="true">&#8594;</span></a>
                </div>
                <div class="dashboard-report-grid">
                    <x-item-card title="Blue canvas backpack" status="lost" category="Personal item" location="Riverside station" date="Today" href="/items/1" />
                    <x-item-card title="Silver keyring" status="found" category="Keys" location="North park entrance" date="Yesterday" href="/items/2" />
                </div>
            </section>

            <aside class="dashboard-activity" aria-labelledby="dashboard-activity-title">
                <div class="dashboard-section-heading">
                    <div>
                        <p class="home-kicker">Recent activity</p>
                        <h2 id="dashboard-activity-title">A little movement.</h2>
                    </div>
                </div>
                <div class="dashboard-timeline">
                    <div class="dashboard-timeline__item dashboard-timeline__item--active">
                        <span class="dashboard-timeline__marker">&#10003;</span>
                        <div><strong>Possible match found</strong><p>Your backpack report has a new suggestion.</p><time>5 min ago</time></div>
                    </div>
                    <div class="dashboard-timeline__item">
                        <span class="dashboard-timeline__marker">&#8599;</span>
                        <div><strong>Report viewed</strong><p>Someone viewed your blue backpack report.</p><time>1 hour ago</time></div>
                    </div>
                    <div class="dashboard-timeline__item">
                        <span class="dashboard-timeline__marker">&#43;</span>
                        <div><strong>Report created</strong><p>Your report is now visible to the community.</p><time>Today, 9:40 AM</time></div>
                    </div>
                </div>
                <a class="dashboard-activity__link" href="#">See all activity <span aria-hidden="true">&#8594;</span></a>
            </aside>
        </div>

        <section class="dashboard-callout" aria-labelledby="dashboard-callout-title">
            <div class="dashboard-callout__icon" aria-hidden="true">&#10003;</div>
            <div>
                <p class="home-kicker">Good things grow from small details</p>
                <h2 id="dashboard-callout-title">Have you seen something that might help someone else?</h2>
            </div>
            <a class="home-button home-button--lime" href="{{ url('/report-found-item') }}">Report a found item <span aria-hidden="true">&#8599;</span></a>
        </section>
    </section>
@endsection
