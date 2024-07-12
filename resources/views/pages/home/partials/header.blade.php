<header id="header" class="pt-18 flex  min-h-[100vh] relative bg-cover bg-center bg-gray-400 bg-blend-multiply ">

    <div class="bg-black absolute bottom-0 top-0 left-0 right-0  z-10 opacity-50"></div>

    <div class=" pt-28 z-50 flex flex-col justify-center items-center max-w-screen-xl mx-auto text-center px-4 md:px-0">

        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
            <strong class="text-mainColor-300">Podaj Łapsie</strong> - Behawiorysta Psów w Nowym Targu i na Podhalu
        </h1>
        <p class="mb-8 sm:px-16 lg:px-48 text-lg lg:text-xl font-light text-gray-300  ">Jestem behawiorystką
            specjalizującą się w szkoleniu psów na terenie Nowego Targu i Podhala. Moja pasja do pracy z psami oraz
            doświadczenie pozwalają mi pomóc właścicielom w zrozumieniu i poprawieniu zachowań ich czworonożnych
            przyjaciół. Jeśli potrzebujesz profesjonalnej pomocy w kwestiach behawioralnych swojego pupila, jestem tu,
            by Ci pomóc.</p>
        <div class="flex flex-col sm:flex-row sm:justify-center space-y-4 sm:space-y-0 sm:space-x-4 lg:mt-16">

            <x-link-btn :href="route('contact.index')" class="md:px-24 md:py-4 text-xl mt-12">
                Zamów konsultacje
            </x-link-btn>
        </div>
    </div>

</header>
