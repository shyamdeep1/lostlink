@extends('layouts.admin')

@section('title', 'Admin dashboard · LostLink')

@section('content')
    <section class="admin-dashboard">
        <div class="admin-dashboard__heading">
            <div>
                <p class="home-kicker">LostLink administration</p>
                <h1>Keep the community <em>moving well.</em></h1>
                <p>Review reports, support members, and help good connections happen safely.</p>
            </div>
            <div class="admin-dashboard__status"><i></i><strong>Live</strong><span>moderation<br>workspace</span></div>
        </div>

        <div class="admin-dashboard__layout">
            <aside class="admin-sidebar">
                <p class="admin-sidebar__label">Workspace</p>
                <a class="admin-sidebar__link admin-sidebar__link--active" href="{{ url('/admin/dashboard') }}"><span aria-hidden="true">&#9632;</span>Overview</a>
                <a class="admin-sidebar__link" href="{{ url('/admin/posts') }}"><span aria-hidden="true">&#9633;</span>Posts <b>12</b></a>
                <a class="admin-sidebar__link" href="{{ url('/admin/users') }}"><span aria-hidden="true">&#9679;</span>Users</a>
                <a class="admin-sidebar__link" href="#activity"><span aria-hidden="true">&#8599;</span>Activity</a>
                <p class="admin-sidebar__label admin-sidebar__label--second">Quick links</p>
                <a class="admin-sidebar__link" href="{{ url('/items') }}"><span aria-hidden="true">&#9906;</span>View public board</a>
                <a class="admin-sidebar__link" href="{{ url('/') }}"><span aria-hidden="true">&#8592;</span>Back to website</a>
                <div class="admin-sidebar__admin"><span>A</span><div><strong>Admin account</strong><small>Super admin</small></div></div>
            </aside>

            <div class="admin-dashboard__content">
                <div class="admin-stats" aria-label="Administration summary">
                    <div><span>Reports today</span><strong>18</strong><small class="admin-stat-up">+12% this week</small></div>
                    <div><span>Awaiting review</span><strong>12</strong><small>Needs attention</small></div>
                    <div><span>Active members</span><strong>1,284</strong><small class="admin-stat-up">+38 this week</small></div>
                    <div><span>Connections made</span><strong>86</strong><small>This month</small></div>
                </div>

                <section class="admin-overview-grid" id="activity">
                    <div class="admin-panel admin-panel--chart">
                        <div class="admin-panel__heading"><div><p class="home-kicker">Community pulse</p><h2>Reports this week.</h2></div><span>Last 7 days</span></div>
                        <div class="admin-chart" aria-label="Reports this week chart"><div><i style="height: 42%"></i><small>Mon</small></div><div><i style="height: 61%"></i><small>Tue</small></div><div><i style="height: 49%"></i><small>Wed</small></div><div><i style="height: 75%"></i><small>Thu</small></div><div><i style="height: 58%"></i><small>Fri</small></div><div><i style="height: 88%"></i><small>Sat</small></div><div><i style="height: 70%"></i><small>Sun</small></div></div>
                    </div>
                    <div class="admin-panel admin-panel--health">
                        <div class="admin-panel__heading"><div><p class="home-kicker">Platform health</p><h2>Good signs.</h2></div><span class="admin-health-dot">Live</span></div>
                        <div class="admin-health"><div><strong>94%</strong><span>Reports with useful details</span></div><div><strong>78%</strong><span>Replies within one day</span></div></div>
                        <p class="admin-panel__note"><span aria-hidden="true">&#10003;</span> The community is responding well this week.</p>
                    </div>
                </section>

                <section class="admin-panel admin-panel--queue" id="posts">
                    <div class="admin-panel__heading"><div><p class="home-kicker">Moderation queue</p><h2>Posts waiting for a closer look.</h2></div><a href="#">View all <span aria-hidden="true">&#8594;</span></a></div>
                    <div class="admin-queue">
                        <div class="admin-queue__row"><span class="admin-queue__icon admin-queue__icon--lost">L</span><div><strong>Red leather purse</strong><small>Lost · Submitted 12 min ago by Maya K.</small></div><span class="admin-queue__tag">Review</span><button type="button" aria-label="Review Red leather purse">&#8599;</button></div>
                        <div class="admin-queue__row"><span class="admin-queue__icon admin-queue__icon--found">F</span><div><strong>Silver keyring</strong><small>Found · Submitted 24 min ago by Marco D.</small></div><span class="admin-queue__tag">Review</span><button type="button" aria-label="Review Silver keyring">&#8599;</button></div>
                        <div class="admin-queue__row"><span class="admin-queue__icon admin-queue__icon--flagged">!</span><div><strong>Blue sports watch</strong><small>Reported · Flagged by community member</small></div><span class="admin-queue__tag admin-queue__tag--flagged">Flagged</span><button type="button" aria-label="Review Blue sports watch">&#8599;</button></div>
                    </div>
                </section>

                <section class="admin-panel admin-panel--users" id="users">
                    <div class="admin-panel__heading"><div><p class="home-kicker">Member activity</p><h2>Keep an eye on the people helping.</h2></div><a href="{{ url('/admin/users') }}">Manage users <span aria-hidden="true">&#8594;</span></a></div>
                    <div class="admin-user-list"><div><span class="admin-user-list__avatar">R</span><span><strong>Riya Patel</strong><small>Posted a found item · 5 min ago</small></span><b class="admin-user-list__online">Active</b></div><div><span class="admin-user-list__avatar admin-user-list__avatar--green">J</span><span><strong>James Wilson</strong><small>Updated a lost report · 18 min ago</small></span><b class="admin-user-list__online">Active</b></div><div><span class="admin-user-list__avatar admin-user-list__avatar--plain">M</span><span><strong>Maya Khan</strong><small>Joined LostLink · 42 min ago</small></span><b class="admin-user-list__online">New</b></div></div>
                </section>
            </div>
        </div>
    </section>
@endsection
