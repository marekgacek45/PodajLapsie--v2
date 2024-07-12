@props(['title', 'description', 'bodyClasses' => '', 'noFollow' => false])

<!DOCTYPE html>
<html lang="pl">

<head>
    {{-- cookieYes --}}
    @include('partials.cookies')
    {{-- googleAnalytics --}}
    @include('partials.analytics')
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- meta --}}
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    {{-- noFollow --}}
    @if ($noFollow)
        <meta name="robots" content="noindex, nofollow">
    @endisset
    {{-- cannonical --}}
    <link rel="canonical" href="{{ url()->current() }}" />
    {{-- fonts --}}
    @include('partials.fonts')
    {{-- favicon --}}
    @include('partials.favicon')
    {{-- facebook-meta --}}
    @include('partials.facebook')




    @livewireStyles
    @vite(['resources/css/app.css'])
</head>

<body class="{{ $bodyClasses }}">
<x-shared.preloader />
<!--NAVIGATION -->
<x-shared.nav.navbar />

{{ $slot }}


<!--FOOTER -->
<x-shared.footer />

@livewireScripts
@vite(['resources/js/app.js'])
</body>

</html>
