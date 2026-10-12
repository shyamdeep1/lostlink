@extends('layouts.admin')

@section('title', 'Moderation queue · LostLink')

@section('content')
    <section class="admin-posts-page">
        <div class="admin-posts-page__heading">
            <div><p class="home-kicker">LostLink administration</p><h1>Give every post a <em>fair look.</em></h1><p>Review the community reports that need a little attention before they go public.</p></div>
            <div class="admin-posts-page__count"><strong data-post-count>12</strong><span>posts waiting<br>for review</span></div>
        </div>

        <div class="admin-posts-layout">
            <aside class="admin-sidebar">
                <p class="admin-sidebar__label">Workspace</p>
                <a class="admin-sidebar__link" href="{{ url('/admin/dashboard') }}"><span aria-hidden="true">&#9632;</span>Overview</a>
                <a class="admin-sidebar__link admin-sidebar__link--active" href="{{ url('/admin/posts') }}"><span aria-hidden="true">&#9633;</span>Posts <b>12</b></a>
                <a class="admin-sidebar__link" href="{{ url('/admin/users') }}"><span aria-hidden="true">&#9679;</span>Users</a>
                <a class="admin-sidebar__link" href="{{ url('/admin/dashboard#activity') }}"><span aria-hidden="true">&#8599;</span>Activity</a>
                <p class="admin-sidebar__label admin-sidebar__label--second">Quick links</p>
                <a class="admin-sidebar__link" href="{{ url('/items') }}"><span aria-hidden="true">&#9906;</span>View public board</a>
                <a class="admin-sidebar__link" href="{{ url('/') }}"><span aria-hidden="true">&#8592;</span>Back to website</a>
                <div class="admin-sidebar__admin"><span>A</span><div><strong>Admin account</strong><small>Super admin</small></div></div>
            </aside>

            <section class="admin-posts-panel" aria-labelledby="admin-posts-title">
                <div class="admin-posts-panel__heading"><div><p class="home-kicker">Moderation queue</p><h2 id="admin-posts-title">Posts waiting for a closer look.</h2></div><span>Updated just now</span></div>
                <div class="admin-posts-toolbar"><div class="admin-posts-tabs" role="group" aria-label="Filter posts"><button class="admin-posts-tab admin-posts-tab--active" type="button" data-post-filter="pending">Pending <span>12</span></button><button class="admin-posts-tab" type="button" data-post-filter="flagged">Flagged <span>3</span></button><button class="admin-posts-tab" type="button" data-post-filter="approved">Approved <span>86</span></button></div><label class="admin-posts-search" for="admin-posts-search"><span aria-hidden="true">&#9906;</span><input id="admin-posts-search" type="search" placeholder="Search reports" data-post-search></label></div>

                <div class="admin-post-list" data-post-list>
                    <article class="admin-post-row" data-post-state="pending" data-post-kind="lost" data-post-search="red leather purse lost accessories maya khan"><div class="admin-post-row__visual admin-post-row__visual--lost">L</div><div class="admin-post-row__body"><div><span class="admin-post-row__type">Lost report</span><span class="admin-post-row__time">12 min ago</span></div><h3>Red leather purse</h3><p>Submitted by Maya Khan · Market street</p></div><span class="admin-post-row__flag">New</span><div class="admin-post-row__actions"><button type="button" class="admin-post-action admin-post-action--approve" data-post-action="approve">Approve</button><button type="button" class="admin-post-action" data-post-action="reject">Reject</button></div></article>
                    <article class="admin-post-row" data-post-state="pending" data-post-kind="found" data-post-search="silver keyring found keys marco d north park"><div class="admin-post-row__visual admin-post-row__visual--found">F</div><div class="admin-post-row__body"><div><span class="admin-post-row__type">Found report</span><span class="admin-post-row__time">24 min ago</span></div><h3>Silver keyring</h3><p>Submitted by Marco D. · North park entrance</p></div><span class="admin-post-row__flag">New</span><div class="admin-post-row__actions"><button type="button" class="admin-post-action admin-post-action--approve" data-post-action="approve">Approve</button><button type="button" class="admin-post-action" data-post-action="reject">Reject</button></div></article>
                    <article class="admin-post-row" data-post-state="flagged" data-post-kind="lost" data-post-search="blue sports watch flagged lost technology james wilson"><div class="admin-post-row__visual admin-post-row__visual--flagged">!</div><div class="admin-post-row__body"><div><span class="admin-post-row__type">Lost report</span><span class="admin-post-row__time">1 hour ago</span></div><h3>Blue sports watch</h3><p>Flagged by a community member · Submitted by James Wilson</p></div><span class="admin-post-row__flag admin-post-row__flag--warning">Flagged</span><div class="admin-post-row__actions"><button type="button" class="admin-post-action admin-post-action--approve" data-post-action="approve">Approve</button><button type="button" class="admin-post-action" data-post-action="reject">Reject</button></div></article>
                    <article class="admin-post-row" data-post-state="pending" data-post-kind="lost" data-post-search="green wool scarf lost clothing sana shah riverside cafe"><div class="admin-post-row__visual admin-post-row__visual--lost">L</div><div class="admin-post-row__body"><div><span class="admin-post-row__type">Lost report</span><span class="admin-post-row__time">2 hours ago</span></div><h3>Green wool scarf</h3><p>Submitted by Sana Shah · Riverside cafe</p></div><span class="admin-post-row__flag">New</span><div class="admin-post-row__actions"><button type="button" class="admin-post-action admin-post-action--approve" data-post-action="approve">Approve</button><button type="button" class="admin-post-action" data-post-action="reject">Reject</button></div></article>
                    <article class="admin-post-row" data-post-state="approved" data-post-kind="found" data-post-search="black wallet found accessories riya patel city library"><div class="admin-post-row__visual admin-post-row__visual--found">F</div><div class="admin-post-row__body"><div><span class="admin-post-row__type">Found report</span><span class="admin-post-row__time">Yesterday</span></div><h3>Black leather wallet</h3><p>Submitted by Riya Patel · City library</p></div><span class="admin-post-row__flag admin-post-row__flag--approved">Live</span><div class="admin-post-row__actions"><button type="button" class="admin-post-action" data-post-action="archive">Archive</button></div></article>
                </div>

                <div class="admin-posts-empty" data-posts-empty hidden><span aria-hidden="true">&#9906;</span><h3>No reports in this view.</h3><p>Try another filter or search term.</p></div>
                <div class="admin-posts-panel__footer"><span>Showing <b data-post-visible>4</b> reports in this view</span><a href="#">Load older reports <span aria-hidden="true">&#8594;</span></a></div>
            </section>
        </div>
    </section>

    <script>
        (() => {
            const page = document.querySelector('.admin-posts-page');
            if (!page) return;
            const search = page.querySelector('[data-post-search]');
            const filters = page.querySelectorAll('[data-post-filter]');
            const rows = page.querySelectorAll('.admin-post-row');
            const empty = page.querySelector('[data-posts-empty]');
            const visibleCount = page.querySelector('[data-post-visible]');
            let activeFilter = 'pending';

            const updatePosts = () => {
                const query = search.value.toLowerCase().trim();
                let visible = 0;
                rows.forEach((row) => {
                    const matchesFilter = row.dataset.postState === activeFilter;
                    const matchesSearch = !query || row.dataset.postSearch.includes(query);
                    row.hidden = !(matchesFilter && matchesSearch);
                    if (!row.hidden) visible += 1;
                });
                visibleCount.textContent = visible;
                empty.hidden = visible !== 0;
            };

            rows.forEach((row) => row.querySelectorAll('[data-post-action]').forEach((action) => action.addEventListener('click', () => {
                row.dataset.postState = action.dataset.postAction === 'approve' ? 'approved' : action.dataset.postAction === 'reject' ? 'rejected' : 'archived';
                row.classList.add('admin-post-row--handled');
                row.querySelector('.admin-post-row__flag').textContent = action.dataset.postAction === 'approve' ? 'Approved' : action.dataset.postAction === 'reject' ? 'Rejected' : 'Archived';
                updatePosts();
            })));

            search.addEventListener('input', updatePosts);
            filters.forEach((filter) => filter.addEventListener('click', () => {
                activeFilter = filter.dataset.postFilter;
                filters.forEach((item) => item.classList.toggle('admin-posts-tab--active', item === filter));
                updatePosts();
            }));
            updatePosts();
        })();
    </script>
@endsection
