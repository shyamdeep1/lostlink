@extends('layouts.admin')

@section('title', 'Manage users · LostLink')

@section('content')
    <section class="admin-users-page">
        <div class="admin-users-page__heading">
            <div><p class="home-kicker">LostLink administration</p><h1>Look after the <em>people.</em></h1><p>Manage member access and keep the community safe, useful, and welcoming.</p></div>
            <div class="admin-users-page__count"><strong data-user-count>1,284</strong><span>active members<br>on LostLink</span></div>
        </div>

        <div class="admin-users-layout">
            <aside class="admin-sidebar">
                <p class="admin-sidebar__label">Workspace</p>
                <a class="admin-sidebar__link" href="{{ url('/admin/dashboard') }}"><span aria-hidden="true">&#9632;</span>Overview</a>
                <a class="admin-sidebar__link" href="#"><span aria-hidden="true">&#9633;</span>Posts <b>12</b></a>
                <a class="admin-sidebar__link admin-sidebar__link--active" href="{{ url('/admin/users') }}"><span aria-hidden="true">&#9679;</span>Users</a>
                <a class="admin-sidebar__link" href="{{ url('/admin/dashboard#activity') }}"><span aria-hidden="true">&#8599;</span>Activity</a>
                <p class="admin-sidebar__label admin-sidebar__label--second">Quick links</p>
                <a class="admin-sidebar__link" href="{{ url('/items') }}"><span aria-hidden="true">&#9906;</span>View public board</a>
                <a class="admin-sidebar__link" href="{{ url('/') }}"><span aria-hidden="true">&#8592;</span>Back to website</a>
                <div class="admin-sidebar__admin"><span>A</span><div><strong>Admin account</strong><small>Super admin</small></div></div>
            </aside>

            <section class="admin-users-panel" aria-labelledby="admin-users-title">
                <div class="admin-users-panel__heading"><div><p class="home-kicker">Member directory</p><h2 id="admin-users-title">Everyone has a place here.</h2></div><span class="admin-users-panel__updated">Updated just now</span></div>
                <div class="admin-users-toolbar"><div class="admin-users-tabs" role="group" aria-label="Filter users"><button class="admin-users-tab admin-users-tab--active" type="button" data-user-filter="all">All <span>8</span></button><button class="admin-users-tab" type="button" data-user-filter="active">Active <span>6</span></button><button class="admin-users-tab" type="button" data-user-filter="disabled">Disabled <span>2</span></button></div><label class="admin-users-search" for="admin-users-search"><span aria-hidden="true">&#9906;</span><input id="admin-users-search" type="search" placeholder="Search members" data-user-search></label></div>

                <div class="admin-user-table" data-user-table>
                    <div class="admin-user-table__head"><span>Member</span><span>Joined</span><span>Reports</span><span>Status</span><span>Access</span></div>
                    <div class="admin-user-row" data-user-status="active" data-user-search="riya patel riya@example.com"><div class="admin-user-row__member"><span class="admin-user-row__avatar">R</span><span><strong>Riya Patel</strong><small>riya.patel@example.com</small></span></div><span>Oct 12, 2024</span><span>06</span><span><b class="admin-user-status admin-user-status--active" data-user-label>Active</b></span><label class="admin-user-toggle" aria-label="Disable Riya Patel"><input type="checkbox" checked data-user-toggle><i></i></label></div>
                    <div class="admin-user-row" data-user-status="active" data-user-search="james wilson james@example.com"><div class="admin-user-row__member"><span class="admin-user-row__avatar admin-user-row__avatar--green">J</span><span><strong>James Wilson</strong><small>james.wilson@example.com</small></span></div><span>Sep 28, 2024</span><span>03</span><span><b class="admin-user-status admin-user-status--active" data-user-label>Active</b></span><label class="admin-user-toggle" aria-label="Disable James Wilson"><input type="checkbox" checked data-user-toggle><i></i></label></div>
                    <div class="admin-user-row" data-user-status="active" data-user-search="maya khan maya@example.com"><div class="admin-user-row__member"><span class="admin-user-row__avatar admin-user-row__avatar--plain">M</span><span><strong>Maya Khan</strong><small>maya.khan@example.com</small></span></div><span>Sep 14, 2024</span><span>11</span><span><b class="admin-user-status admin-user-status--active" data-user-label>Active</b></span><label class="admin-user-toggle" aria-label="Disable Maya Khan"><input type="checkbox" checked data-user-toggle><i></i></label></div>
                    <div class="admin-user-row" data-user-status="disabled" data-user-search="oliver grant oliver@example.com"><div class="admin-user-row__member"><span class="admin-user-row__avatar admin-user-row__avatar--muted">O</span><span><strong>Oliver Grant</strong><small>oliver.grant@example.com</small></span></div><span>Aug 30, 2024</span><span>00</span><span><b class="admin-user-status admin-user-status--disabled" data-user-label>Disabled</b></span><label class="admin-user-toggle" aria-label="Enable Oliver Grant"><input type="checkbox" data-user-toggle><i></i></label></div>
                    <div class="admin-user-row" data-user-status="active" data-user-search="sana shah sana@example.com"><div class="admin-user-row__member"><span class="admin-user-row__avatar admin-user-row__avatar--lime">S</span><span><strong>Sana Shah</strong><small>sana.shah@example.com</small></span></div><span>Aug 18, 2024</span><span>08</span><span><b class="admin-user-status admin-user-status--active" data-user-label>Active</b></span><label class="admin-user-toggle" aria-label="Disable Sana Shah"><input type="checkbox" checked data-user-toggle><i></i></label></div>
                    <div class="admin-user-row" data-user-status="disabled" data-user-search="tom baker tom@example.com"><div class="admin-user-row__member"><span class="admin-user-row__avatar admin-user-row__avatar--muted">T</span><span><strong>Tom Baker</strong><small>tom.baker@example.com</small></span></div><span>Jul 06, 2024</span><span>01</span><span><b class="admin-user-status admin-user-status--disabled" data-user-label>Disabled</b></span><label class="admin-user-toggle" aria-label="Enable Tom Baker"><input type="checkbox" data-user-toggle><i></i></label></div>
                </div>

                <div class="admin-users-empty" data-users-empty hidden><span aria-hidden="true">&#9906;</span><h3>No members found.</h3><p>Try another name or status filter.</p></div>
                <div class="admin-users-panel__footer"><span>Showing <b data-user-visible>6</b> of 1,284 members</span><a href="#">Export directory <span aria-hidden="true">&#8599;</span></a></div>
            </section>
        </div>
    </section>

    <script>
        (() => {
            const page = document.querySelector('.admin-users-page');
            if (!page) return;
            const search = page.querySelector('[data-user-search]');
            const filters = page.querySelectorAll('[data-user-filter]');
            const rows = page.querySelectorAll('.admin-user-row');
            const empty = page.querySelector('[data-users-empty]');
            const visibleCount = page.querySelector('[data-user-visible]');
            let activeFilter = 'all';

            const updateRows = () => {
                const query = search.value.toLowerCase().trim();
                let visible = 0;
                rows.forEach((row) => {
                    const matchesFilter = activeFilter === 'all' || row.dataset.userStatus === activeFilter;
                    const matchesSearch = !query || row.dataset.userSearch.includes(query);
                    row.hidden = !(matchesFilter && matchesSearch);
                    if (!row.hidden) visible += 1;
                });
                visibleCount.textContent = visible;
                empty.hidden = visible !== 0;
            };

            rows.forEach((row) => {
                const toggle = row.querySelector('[data-user-toggle]');
                const label = row.querySelector('[data-user-label]');
                const name = row.querySelector('strong').textContent;
                toggle.addEventListener('change', () => {
                    const enabled = toggle.checked;
                    row.dataset.userStatus = enabled ? 'active' : 'disabled';
                    label.textContent = enabled ? 'Active' : 'Disabled';
                    label.classList.toggle('admin-user-status--active', enabled);
                    label.classList.toggle('admin-user-status--disabled', !enabled);
                    toggle.parentElement.setAttribute('aria-label', `${enabled ? 'Disable' : 'Enable'} ${name}`);
                    updateRows();
                });
            });

            search.addEventListener('input', updateRows);
            filters.forEach((filter) => filter.addEventListener('click', () => {
                activeFilter = filter.dataset.userFilter;
                filters.forEach((item) => item.classList.toggle('admin-users-tab--active', item === filter));
                updateRows();
            }));
        })();
    </script>
@endsection
