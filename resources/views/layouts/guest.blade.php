<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f7f8f3">
    <title>@yield('title', 'LostLink')</title>
    <style>
        {!! file_get_contents(resource_path('css/app.css')) !!}
    </style>
</head>
<body class="guest-layout">
    <x-navbar />

    <main class="guest-layout__main">
        @yield('content')
    </main>

    <x-chat-widget />
    <x-footer />
</body>
</html>
