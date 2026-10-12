@extends('layouts.app')

@section('content')
    <section class="report-hero">
        <div>
            <p class="home-kicker">Help it find its way home</p>
            <h1>Tell us about the thing you <em>lost.</em></h1>
            <p class="report-hero__copy">A few thoughtful details can help someone recognise your item and make the right connection.</p>
        </div>
        <div class="report-hero__step" aria-label="Report progress">
            <strong>01</strong>
            <span>of 03</span>
            <i></i>
            <small>Start with the<br>details you remember.</small>
        </div>
    </section>

    <section class="report-form-section" aria-labelledby="report-form-title">
        <div class="report-form-intro">
            <p class="home-kicker">Lost item report</p>
            <h2 id="report-form-title">The more you share, the easier it is to recognise.</h2>
            <p>This form is a frontend preview. Your report will connect to the LostLink community once the backend is ready.</p>
            <div class="report-form-intro__tip">
                <span aria-hidden="true">&#10003;</span>
                <p><strong>Helpful detail</strong><br>Think about colour, markings, and where you last saw it.</p>
            </div>
        </div>

        <form class="report-form" action="#" method="post" onsubmit="return false;">
            <div class="report-form__progress" aria-label="Form progress">
                <span class="report-form__progress--active">01 Item</span>
                <span>02 Place</span>
                <span>03 Contact</span>
            </div>

            <div class="report-form__field-group">
                <label for="lost-item-name">What did you lose?</label>
                <input id="lost-item-name" name="item_name" type="text" placeholder="e.g. Blue canvas backpack">
            </div>

            <div class="report-form__two-col">
                <div class="report-form__field-group">
                    <label for="lost-item-category">Category</label>
                    <select id="lost-item-category" name="category">
                        <option value="" selected disabled>Choose one</option>
                        <option>Personal item</option>
                        <option>Technology</option>
                        <option>Keys</option>
                        <option>Clothing</option>
                        <option>Accessories</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="report-form__field-group">
                    <label for="lost-item-date">When did you lose it?</label>
                    <input id="lost-item-date" name="lost_date" type="date">
                </div>
            </div>

            <div class="report-form__field-group">
                <label for="lost-item-place">Where did you last see it?</label>
                <input id="lost-item-place" name="location" type="text" placeholder="e.g. Riverside station, platform 2">
            </div>

            <div class="report-form__field-group">
                <label for="lost-item-description">What should people look for?</label>
                <textarea id="lost-item-description" name="description" rows="4" placeholder="Add colour, size, markings, or anything distinctive..."></textarea>
            </div>

            <div class="report-form__upload">
                <label for="lost-item-image">
                    <span class="report-form__upload-icon" aria-hidden="true">&#43;</span>
                    <span><strong>Add a photo</strong><small>A clear image can make a big difference · JPG or PNG</small></span>
                </label>
                <input id="lost-item-image" name="image" type="file" accept="image/png,image/jpeg">
            </div>

            <div class="report-form__actions">
                <a class="home-text-link" href="{{ url('/items') }}">Back to reports <span aria-hidden="true">&#8592;</span></a>
                <button class="home-button home-button--dark" type="submit">Continue <span aria-hidden="true">&#8594;</span></button>
            </div>
        </form>
    </section>
@endsection
