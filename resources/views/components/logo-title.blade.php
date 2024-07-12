@props(['textClass' => 'text-black'])

<a href="{{ Route::currentRouteName() === 'home' ? '#' : route('home.index') }}" class="flex items-center">
    <img src="{{ asset('assets/logo.png') }}" class="h-14 mr-3" alt="logo firmy Podaj Łapsie" />
    <span class="self-center text-2xl font-extralight whitespace-nowrap  {{ $textClass }}">Podaj Łapsie</span>
</a>