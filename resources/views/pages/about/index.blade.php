<x-layouts.app title="Podaj Łapsie - Poznaj mnie: Behawiorysta i Trener Psów w Nowym Targu"
    description="Witaj! Jestem behawiorystą i trenerem psów w Nowym Targu. Pomagam rozwiązywać problemy zachowania u pupili i prowadzę profesjonalne kursy szkoleniowe. Poznaj mnie i  moje podejście i popraw relację ze swoim psem już dziś!">



    <main class="pt-16">

        <x-section class="bg2 bg-gray-800">

            <x-wrapper id="o_mnie" :title="'O mnie'">
                {{-- CARD ONE --}}


                <x-card-text-right :title="'Behawiorysta'" src="{{ asset('assets/images/podajlapsie_01.webp') }}"
                    :alt="'Izabela wraz ze swoim psem Pajdkiem nad rzeką'" loading='lazy'>


                    <p> <strong class="font-semibold">W roli behawiorysty, pełnię rolę psiego psychologa.</strong>
                        Odpowiedzialność ta nie ogranicza się
                        wyłącznie do zrozumienia psich zachowań czy analizy mowy ciała. Sięgam głębiej, wnikając w
                        historię życia oraz doświadczenia zwierzęcia, a także jego pochodzenie. To właśnie dzięki tej
                        kompleksowej analizie potrafię skutecznie rozwiązywać problemy, które wpływają nie tylko na
                        życie czworonoga, lecz także na życie i harmonię w relacji między psem a jego właścicielem.
                        <strong class="font-semibold">W
                            mojej pracy nie ograniczam się jedynie do eliminowania problemów</strong> – przeciwnie,
                        staram się
                        tworzyć warunki, które ułatwiają życie człowieka z psem, a także skutecznie zapobiegają
                        sytuacjom potencjalnie niebezpiecznym.
                    </p>
                    <p>
                        Moja pasja do psów napędza mnie do nieustannego pogłębiania wiedzy i doskonalenia umiejętności.
                        Dzięki temu jestem w stanie oferować indywidualne podejście, które uwzględnia unikalne potrzeby
                        każdego zwierzęcia oraz jego właściciela. <strong class="font-semibold">Wierzę, że każdy pies
                            zasługuje na pełne zrozumienie, miłość i szczęście, a moja misja polega na pomocy
                            właścicielom w osiągnięciu tego celu.</strong>
                    </p>


                </x-card-text-right>
                {{-- CARD TWO --}}


                <x-card-text-left :title="'Zoopsycholog'" src="{{ asset('assets/images/podajlapsie_12.webp') }}"
                    :alt="'Izabela wraz ze swoim psem Pajdkiem nad rzeką'" loading='lazy'>
                    <p><strong class="font-semibold">Jako zoopsycholog, moje podejście jest jeszcze bardziej
                            kompleksowe.
                            Skupiam się nie tylko na
                            zwierzęciu, lecz także na jego opiekunie.</strong> To połączenie dwóch perspektyw pozwala mi
                        kreować
                        relacje, które nie tylko zaspokajają instynkty i potrzeby zwierzaka, ale także uczą właściciela,
                        jak radzić sobie z problematycznymi zachowaniami. Wręcz przeciwnie, moja praca opiera się na
                        holistycznym podejściu, które uwzględnia zarówno zwierzę, jak i jego opiekuna. <strong
                            class="font-semibold">Dzięki temu mogę
                            nie tylko eliminować problemy, ale przede wszystkim kształtować trwałe, pozytywne efekty,
                            które
                            przekładają się na harmonijną współpracę między człowiekiem a psem.</strong>.
                    </p>
                    <p> <strong class="font-semibold">Moja terapia oparta jest na metodzie UFT (ang. Understand, Find,
                            Transform), co oznacza, że podchodzę do pracy z psem w sposób kompleksowy.</strong> Skupiam
                        się na zrozumieniu, odnalezieniu istoty problemu, a następnie dokonywaniu transformacji.
                        Wybieram podejście, które uwzględnia emocje oraz mowę ciała psa. Dzięki temu nie tylko osiągamy
                        długotrwałe sukcesy, ale także poprawiamy ogólne samopoczucie zwierzęcia. Ta holistyczna metoda
                        przekłada się na zadowolenie właściciela</p>


                </x-card-text-left>
                {{-- CARD THREE --}}


                <x-card-text-right :title="'Praca z czworonogiem'" src="{{ asset('assets/images/podajlapsie_05.webp') }}"
                    :alt="' Pies Pajdek nad rzeką'" loading='lazy'>


                    <p> Mam ukończony podstawowy kurs pierwszej pomocy, co oznacza, że twój pies jest u mnie w
                        bezpiecznych rękach.

                        Nie obawiaj się, jeśli twój pies jest nadpobudliwy, agresywny lub wyjątkowo lękliwy – mam
                        doświadczenie w pracy z takimi przypadkami. <strong class="font-semibold">Nawet mój własny pies
                            był nieco problematyczny, co sprawiło, że moje umiejętności praktyczne rozwijam
                            codziennie.</strong>
                    </p>
                    <p><strong class="font-semibold">Przez moje codzienne doświadczenia z psem nauczyłam się odczytywać
                            subtelne sygnały, które mogą świadczyć o bólu, ale nie zawsze są widoczne gołym
                            okiem.</strong> Posiadam także podstawową wiedzę na temat leków, dzięki czemu mogę
                        efektywnie współpracować z twoim weterynarzem, zapewniając kompleksową opiekę nad twoim
                        zwierzakiem.</p>
                    <p>Podstawą mojej pracy jest skuteczna komunikacja z psem, której fundamentem jest analiza jego mowy
                        ciała. Pies nie posługuje się słowami, ale jest mistrzem w przekazywaniu emocji za pomocą gestów
                        i zachowań. <strong class="font-semibold">Po konsultacji ze mną, zauważysz, że twój pies to
                            prawdziwy gaduła – pozwól mi pomóc ci zrozumieć, co próbuje ci przekazać.</strong></p>


                </x-card-text-right>

                <h2 class=" my-16 text-3xl font-extrabold tracking-tight leading-none  md:text-3xl lg:text-5xl">Moje
                    Certyfikaty
                </h2>

                {{-- <x-carousel.carousel /> --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">



                    @foreach ($certificates as $image)
                        @php
                            $horizontal = $image->horizontal;
                            if ($horizontal) {
                                $width = '200';
                                $height = '287';
                            } else {
                                $width = '333';
                                $height = '233';
                            }
                        @endphp

                        <div class="flex-shrink-0 flex justify-center items-center">
                            <a href="{{ asset($image->getImageUrl()) }}" class="glightbox">
                                <img class=" max-w-full rounded-lg" src="{{ asset($image->getImageUrl()) }}"
                                    alt="zdjęcie certyfikatu" width="{{ $width }}" height="{{ $height }}"
                                    loading="lazy">
                            </a>
                        </div>
                    @endforeach
                </div>


                <x-link-btn :href="route('contact.index')" class="md:px-24 md:py-4 text-xl mt-12">
                    Zamów konsultacje
                </x-link-btn>
            </x-wrapper>
        </x-section>

    </main>
</x-layouts.app>
