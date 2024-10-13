<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-full flex-col bg-[#070715] text-[#C3C3D1]">
    <x-ui.navbar />
    <main class="mx-auto w-full max-w-7xl px-4 py-[40px] sm:px-6 lg:px-8">
        {{ $slot }}
    </main>
</body>

</html>
