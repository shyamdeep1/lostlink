<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#17211f">
    <title>@yield('title', 'Admin · LostLink')</title>
    <style>
        {!! file_get_contents(resource_path('css/app.css')) !!}
    </style>
</head>
<body class="admin-layout">
    <x-navbar />

    <main class="admin-layout__main">
        @yield('content')
    </main>

    <x-chat-widget />
    <x-footer />
</body>
</html>
