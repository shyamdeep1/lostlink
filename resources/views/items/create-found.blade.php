@extends('layouts.app')

@section('content')
    <section class="report-hero report-hero--found">
        <div>
            <p class="home-kicker">Be the reason it gets home</p>
            <h1>You found something that belongs to <em>someone.</em></h1>
            <p class="report-hero__copy">Share a few details and give its owner a better chance of recognising it and getting it back.</p>
        </div>
        <div class="report-hero__step" aria-label="Report progress">
            <strong>01</strong>
            <span>of 03</span>
            <i></i>
            <small>Start with the<br>details you noticed.</small>
        </div>
    </section>

    <section class="report-form-section report-form-section--found" aria-labelledby="found-form-title">
        <div class="report-form-intro">
            <p class="home-kicker">Found item report</p>
            <h2 id="found-form-title">A little information can close the distance.</h2>
            <p>This form is a frontend preview. Your report will connect to the LostLink community once the backend is ready.</p>
            <div class="report-form-intro__tip">
                <span aria-hidden="true">&#10003;</span>
                <p><strong>Helpful detail</strong><br>Keep the item safe and share only what helps its owner identify it.</p>
            </div>
        </div>

        <form class="report-form" action="#" method="post" onsubmit="return false;">
            <div class="report-form__progress" aria-label="Form progress">
                <span class="report-form__progress--active">01 Item</span>
                <span>02 Place</span>
                <span>03 Contact</span>
            </div>

            <div class="report-form__field-group">
                <label for="found-item-name">What did you find?</label>
                <input id="found-item-name" name="item_name" type="text" placeholder="e.g. Black leather wallet">
            </div>

            <div class="report-form__two-col">
                <div class="report-form__field-group">
                    <label for="found-item-category">Category</label>
                    <select id="found-item-category" name="category">
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
                    <label for="found-item-date">When did you find it?</label>
                    <input id="found-item-date" name="found_date" type="date">
                </div>
            </div>

            <div class="report-form__field-group">
                <label for="found-item-place">Where did you find it?</label>
                <input id="found-item-place" name="location" type="text" placeholder="e.g. City library, reading room">
            </div>

            <div class="report-form__field-group">
                <label for="found-item-description">What should the owner know?</label>
                <textarea id="found-item-description" name="description" rows="4" placeholder="Add colour, markings, condition, or where you are keeping it..."></textarea>
            </div>

            <div class="report-form__upload">
                <label for="found-item-image">
                    <span class="report-form__upload-icon" aria-hidden="true">&#43;</span>
                    <span><strong>Add a photo</strong><small>A clear image can make a big difference · JPG or PNG</small></span>
                </label>
                <input id="found-item-image" name="image" type="file" accept="image/png,image/jpeg">
            </div>

            <div class="report-form__actions">
                <a class="home-text-link" href="{{ url('/items') }}">Back to reports <span aria-hidden="true">&#8592;</span></a>
                <button class="home-button home-button--dark" type="submit">Continue <span aria-hidden="true">&#8594;</span></button>
            </div>
        </form>
    </section>
@endsection
