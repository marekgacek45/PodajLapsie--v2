<x-section class="bg3 bg-gray-900">
    <x-wrapper id="uslugi" :title="'Usługi'">


        <div class="hidden lg:grid grid-cols-8 gap-8 mt-8 ">
            <x-offer-card :title="'Konsultacje Behawioralne'" class="col-start-3 col-end-7"
                src="{{ asset('assets/images/podajlapsie_16.webp') }}" alt="'Izabela odpoczywa ze swoim psem Pajdkiem'"
                href="{{ route('consultations.index') }}">>Masz problem z zachowaniem psa? Niszczy mieszkanie? Nadmiernie
                szczeka? Kradnie rzeczy? Skacze
                na ludzi? Jest agresywny? A może oczekujesz dziecka i nie wiesz jak przygotować pupila na nową
                życiową sytuację?</x-offer-card>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-8 m-2 xs:m-8 sm:mx-32 lg:mx-2">
            <x-offer-card :title="'Konsultacje Behawioralne'" class="lg:hidden" src="{{ asset('assets/images/podajlapsie_16.webp') }}"
                alt="'Izabela odpoczywa ze swoim psem Pajdkiem'" href="{{ route('consultations.index') }}">Masz problem z
                zachowaniem psa? Niszczy mieszkanie? Nadmiernie szczeka? Kradnie rzeczy? Skacze
                na ludzi? Jest agresywny? A może oczekujesz dziecka i nie wiesz jak przygotować pupila na nową
                życiową sytuację?</x-offer-card>
            <x-offer-card :title="'Budowanie więzi i relacji'" src="{{ asset('assets/images/stock/podajlapsie_puppy_02.webp') }}"
                alt="'Śliczny mały szczeniaczek'" href="{{ route('puppy.index') }}">Jeżeli masz w domu szczeniaka, pomogę Ci
                zbudować z nim mocną więź, poprowadzę przez Wasze
                pierwsze wspólne miesiące. Zajmiemy się nie tylko waszą więzią emocjonalną, ale również nauką
            </x-offer-card>
            <x-offer-card :title="'Profesjonalna pomoc w wyborze psa'" src="{{ asset('assets/images/podajlapsie_10.webp') }}"
                alt="'Nosek pieska pajdka'" href="{{ route('choice.index') }}">Dopasowanie psa do stylu życia przyszłego
                opiekuna jest bardzo ważne w budowaniu zdrowej relacji z psem. Wpływ na to ma wiele czynników, rytm
                życia opiekuna i cechy charakteru danego psa.

            </x-offer-card>
            <x-offer-card :title="'Petsitting'" src="{{ asset('assets/images/podajlapsie_05.webp') }}"
                alt="'Nosek pieska pajdka'" href="{{ route('petsitting.index') }}">Nie masz czasu wyjść z psem? Trzeba podać
                leki Twojemu psu, gdy jesteś nieobecny? Walczysz z lękiem separacyjnym? A może chcesz wyjechać na
                weekend, ale niestety nie możesz zabrać pupila ze sobą? Oferuję swoje usługi w tym zakresie w zaciszu
                Twojego domu. Dodatkowo dostaniesz poradę behawioralną w gratisie! </x-offer-card>
        </div>



    </x-wrapper>
</x-section>
