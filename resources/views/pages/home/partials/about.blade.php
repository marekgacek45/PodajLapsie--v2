<x-section class="bg2 bg-gray-800">

    <x-wrapper id="o_mnie" :title="'O mnie'">
        {{-- CARD ONE --}}


        <x-card-text-right :title="'Kilka słów o mnie'" src="{{ asset('images/images/4.jpg') }}" :alt="'Izabela wraz ze swoim psem Pajdkiem nad rzeką'">


            <p> <strong class="font-semibold ">Jestem Iza, certyfikowana zoopsycholog i behawiorysta specjalizująca się w
                    szkoleniu psów na terenie Nowego Targu oraz Podhala.</strong> Moje doświadczenie w pracy z psami i
                pasją
                do ich behawioru sprawiają, że jestem pewna, iż Twój pies znajdzie u mnie najlepszą opiekę. Oprócz tego
                zajmuję się 8-letinm kundelkiem Pajdkiem.</p>
            <p>
                Ukończyłam <strong class="font-semibold">Polską Akademię Zoopsychologii i Animaloterapii</strong>.
                Podczas
                trwania zajęć miałam praktyki na których uczono nas komunikacji z psem, która jest bardzo ważna, aby móc
                go
                w pełni rozumieć.
            </p>
            <p>Posiadam bogate doświadczenie zdobyte podczas praktyk w <strong class="font-semibold">warszawskim
                    schronisku
                    dla zwierząt na Paluchu</strong>, gdzie uczyłam się również udzielania pierwszej pomocy
                przedweterynaryjnej. Dzięki temu jestem przygotowana na wszelkie sytuacje i potrafię zadbać o zdrowie
                Twojego pupila.</p>
        </x-card-text-right>
        {{-- CARD TWO --}}


        <x-card-text-left :title="'Jak to się zaczeło?'" src="{{ asset('images/images/2.jpg') }}" :alt="''">
            <p>W 2018 roku adoptowałam psa ze schroniska, po krótkim czasie mocno dały się we znaki, jego problemy z
                zachowaniem szczególnie na spacerach. <strong class="font-semibold">Nikt nie umiał nam pomóc,dlatego
                    stwierdziłam, że biorę sprawy w swoje ręce i oto jestem, również dla Was</strong>.
            </p>
            <p><strong class="font-semibold">Jestem specjalistką w pracy z psami agresywnymi, lękliwymi i
                    nadpobudliwymi.</strong> Wszystkie moje metody szkoleniowe są oparte na zasadzie UFT, co
                oznacza, że stawiam na pozytywne podejście i dobro zwierząt.</p>
            <p>Jeśli szukasz profesjonalnej pomocy w zakresie behawiorystyki i zoopsychologii dla swojego psa na
                terenie Podhala, to jestem dostępna w Nowym Targu. <strong class="font-semibold">Skontaktuj się ze
                    mną, a razem poprawimy jakość życia Twojego pupila i zrozumiesz go jeszcze lepiej.</strong></p>

        </x-card-text-left>


        <x-link-btn :href="route('about.index')" class="md:px-24 md:py-4 text-xl mt-12">
            Dowiedz się więcej
        </x-link-btn>



    </x-wrapper>
</x-section>