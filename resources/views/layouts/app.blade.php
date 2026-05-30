<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>{{ $title ?? config('app.name') . ' - Cyber Investigations & Intelligence' }}</title>
        @if(isset($metaDescription))
            <meta name="description" content="{{ $metaDescription }}">
        @else
            <meta name="description" content="{{ config('app.name') }} is a premier cybercrime investigation firm supporting law enforcement, legal teams, and victims globally.">
        @endif

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-qavixx-base text-gray-400 min-h-screen flex flex-col font-sans overflow-x-hidden selection:bg-qavixx-copper selection:text-black">
        <!-- Livewire handles the navbar via the page components if we want, or we can include it globally here. -->
        @livewire('navbar')

        <main class="flex-grow">
            {{ $slot }}
        </main>

        @livewire('footer')

        @livewireScripts
    </body>
</html>
