@extends('layouts.app')

@section('content')
    <section class="posts-page">
        <div class="posts-page__heading">
            <div>
                <p class="home-kicker">Your account</p>
                <h1>My <em>posts.</em></h1>
                <p>Keep track of the items you have reported and the connections they make.</p>
            </div>
            <div class="posts-page__count"><strong>04</strong><span>total reports<br>shared by you</span></div>
        </div>

        <section class="posts-panel" aria-labelledby="posts-title">
            <div class="posts-panel__topline">
                <div>
                    <p class="home-kicker">Your reports</p>
                    <h2 id="posts-title">A record of what matters.</h2>
                </div>
                <a class="home-button home-button--dark" href="{{ url('/report-lost-item') }}">New report <span aria-hidden="true">&#8599;</span></a>
            </div>

            <div class="posts-toolbar">
                <div class="posts-tabs" role="group" aria-label="Filter your posts">
                    <button class="posts-tab posts-tab--active" type="button" data-post-filter="all">All <span>4</span></button>
                    <button class="posts-tab" type="button" data-post-filter="lost">Lost <span>2</span></button>
                    <button class="posts-tab" type="button" data-post-filter="found">Found <span>2</span></button>
                    <button class="posts-tab" type="button" data-post-filter="resolved">Resolved <span>1</span></button>
                </div>
                <label class="posts-search" for="posts-search">
                    <span aria-hidden="true">&#9906;</span>
                    <input id="posts-search" type="search" placeholder="Search your posts" data-post-search>
                </label>
            </div>

            <div class="posts-list" data-posts-list>
                <article class="post-row" data-post-status="lost" data-post-search="blue canvas backpack personal item riverside station">
                    <div class="post-row__visual post-row__visual--lost"><span aria-hidden="true">&#9679;</span></div>
                    <div class="post-row__body"><p class="post-row__category">Lost · Personal item</p><h3>Blue canvas backpack</h3><p class="post-row__location"><span aria-hidden="true">&#9906;</span> Riverside station · Today</p></div>
                    <span class="post-row__state post-row__state--active">Active</span>
                    <a class="post-row__action" href="/items/1" aria-label="View Blue canvas backpack report">&#8599;</a>
                </article>
                <article class="post-row" data-post-status="found" data-post-search="silver keyring keys north park entrance">
                    <div class="post-row__visual post-row__visual--found"><span aria-hidden="true">&#10003;</span></div>
                    <div class="post-row__body"><p class="post-row__category">Found · Keys</p><h3>Silver keyring</h3><p class="post-row__location"><span aria-hidden="true">&#9906;</span> North park entrance · Yesterday</p></div>
                    <span class="post-row__state post-row__state--match">Possible match</span>
                    <a class="post-row__action" href="/items/2" aria-label="View Silver keyring report">&#8599;</a>
                </article>
                <article class="post-row" data-post-status="lost" data-post-search="green wool scarf clothing riverside cafe">
                    <div class="post-row__visual post-row__visual--lost"><span aria-hidden="true">&#9679;</span></div>
                    <div class="post-row__body"><p class="post-row__category">Lost · Clothing</p><h3>Green wool scarf</h3><p class="post-row__location"><span aria-hidden="true">&#9906;</span> Riverside cafe · 14 Oct</p></div>
                    <span class="post-row__state post-row__state--active">Active</span>
                    <a class="post-row__action" href="/items/3" aria-label="View Green wool scarf report">&#8599;</a>
                </article>
                <article class="post-row" data-post-status="resolved" data-post-search="black leather wallet accessories city library">
                    <div class="post-row__visual post-row__visual--resolved"><span aria-hidden="true">&#10003;</span></div>
                    <div class="post-row__body"><p class="post-row__category">Found · Accessories</p><h3>Black leather wallet</h3><p class="post-row__location"><span aria-hidden="true">&#9906;</span> City library · 10 Oct</p></div>
                    <span class="post-row__state post-row__state--resolved">Returned</span>
                    <a class="post-row__action" href="/items/4" aria-label="View Black leather wallet report">&#8599;</a>
                </article>
            </div>

            <div class="posts-empty" data-posts-empty hidden>
                <span aria-hidden="true">&#9906;</span>
                <h3>No posts here yet.</h3>
                <p>Try another filter or search term.</p>
            </div>
        </section>
    </section>

    <script>
        (() => {
            const page = document.querySelector('.posts-page');
            if (!page) return;
            const search = page.querySelector('[data-post-search]');
            const tabs = page.querySelectorAll('[data-post-filter]');
            const rows = page.querySelectorAll('.post-row');
            const empty = page.querySelector('[data-posts-empty]');
            let activeFilter = 'all';

            const updatePosts = () => {
                const query = search.value.toLowerCase().trim();
                let visible = 0;
                rows.forEach((row) => {
                    const status = row.dataset.postStatus;
                    const matchesFilter = activeFilter === 'all' || status === activeFilter || (activeFilter === 'resolved' && status === 'resolved');
                    const matchesSearch = !query || row.dataset.postSearch.includes(query);
                    row.hidden = !(matchesFilter && matchesSearch);
                    if (!row.hidden) visible += 1;
                });
                empty.hidden = visible !== 0;
            };

            search.addEventListener('input', updatePosts);
            tabs.forEach((tab) => tab.addEventListener('click', () => {
                activeFilter = tab.dataset.postFilter;
                tabs.forEach((item) => item.classList.toggle('posts-tab--active', item === tab));
                updatePosts();
            }));
        })();
    </script>
@endsection
