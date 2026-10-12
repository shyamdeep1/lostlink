@extends('layouts.app')

@section('content')
    <section class="edit-profile-page">
        <div class="edit-profile-page__heading">
            <div>
                <a class="item-detail__back" href="{{ url('/profile') }}"><span aria-hidden="true">&#8592;</span> Back to profile</a>
                <p class="home-kicker">Account settings</p>
                <h1>Make your profile feel like <em>you.</em></h1>
                <p>Keep your details current so the LostLink community knows how to reach you when it matters.</p>
            </div>
            <div class="edit-profile-page__marker" aria-hidden="true"><strong>02</strong><span>of 02</span><i></i><small>Shape the details<br>that help connect.</small></div>
        </div>

        <form class="edit-profile-form" action="#" method="post" onsubmit="return false;">
            <section class="edit-profile-form__section" aria-labelledby="edit-profile-details-title">
                <div class="edit-profile-form__section-heading">
                    <div><p class="home-kicker">Your details</p><h2 id="edit-profile-details-title">A little more about you.</h2></div>
                    <span>01</span>
                </div>
                <div class="edit-profile-avatar-row">
                    <div class="profile-avatar" aria-hidden="true">J</div>
                    <div><strong>Profile photo</strong><p>Help people recognise you in the right context.</p><label class="edit-profile-upload" for="profile-photo">Change photo <span aria-hidden="true">&#8599;</span></label><input id="profile-photo" type="file" accept="image/png,image/jpeg"></div>
                </div>
                <div class="edit-profile-form__grid">
                    <div class="edit-profile-field"><label for="profile-name">Full name</label><input id="profile-name" name="name" type="text" value="Jane Smith" autocomplete="name"></div>
                    <div class="edit-profile-field"><label for="profile-area">Home area</label><input id="profile-area" name="area" type="text" value="Riverside district" placeholder="Your neighbourhood"></div>
                    <div class="edit-profile-field edit-profile-field--wide"><label for="profile-email">Email address</label><input id="profile-email" name="email" type="email" value="jane.smith@example.com" autocomplete="email"></div>
                </div>
            </section>

            <section class="edit-profile-form__section edit-profile-form__section--dark" aria-labelledby="edit-profile-preferences-title">
                <div class="edit-profile-form__section-heading"><div><p class="home-kicker">Preferences</p><h2 id="edit-profile-preferences-title">Choose what stays useful.</h2></div><span>02</span></div>
                <div class="edit-profile-preferences">
                    <label><span><strong>Report updates</strong><small>Let me know when something changes.</small></span><input type="checkbox" checked><i></i></label>
                    <label><span><strong>Possible matches</strong><small>Show me items that might connect.</small></span><input type="checkbox" checked><i></i></label>
                    <label><span><strong>Community notes</strong><small>Occasional news from LostLink.</small></span><input type="checkbox"><i></i></label>
                    <label><span><strong>Preferred language</strong><small>Choose how LostLink speaks to you.</small></span><select aria-label="Preferred language"><option>English</option><option>Hindi</option><option>Gujarati</option></select></label>
                </div>
            </section>

            <div class="edit-profile-form__actions"><a class="home-text-link" href="{{ url('/profile') }}">Cancel <span aria-hidden="true">&#8592;</span></a><button class="home-button home-button--dark" type="submit">Save changes <span aria-hidden="true">&#8599;</span></button></div>
        </form>
    </section>
@endsection
