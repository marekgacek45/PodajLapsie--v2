<x-layouts.app title="Podaj Łapsie - Behawiorysta Psów w Nowym Targu i na Podhalu"
    description="Podaj Łapsie - Profesjonalny behawiorysta psów i zoopsycholog w Nowym Targu i na Podhalu. Pomogę zrozumieć i rozwiązać problemy behawioralne Twojego pupila. Skontaktuj się już teraz!"
    bodyClasses="flex flex-col justify-between min-h-screen bg5 bg-blend-multiply bg-gray-800 bg-no-repeat bg-cover bg-center" noFollow>

    <main
        class="flex flex-col items-center justify-center flex-grow max-w-screen-xl mx-auto px-12 md:px-0 text-center mt-32">

        <h1 class="text-4xl md:text-6xl mb-3 lg:mb-6">404</h1>
        <h2 class="text-2xl md:text-3xl mb-6">Niestety nie ma takiej strony</h2>


        <img src="{{ asset('images/assets/404.png') }}" alt="zdjęcie pieska" class="w-28 md:w-36" width="150" height="225">


        <a href="{{ url()->previous() }}"
            class="text-sm md:text-base lg:text-sm text-white my-12 md:mb-0 lg:mb-12">Powrót</a>
    </main>

</x-layouts.app>
