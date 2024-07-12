<x-layouts.app title="Podaj Łapsie -  Opieka nad Zwierzętami z Profesjonalistą | Petsitting w Nowym Targu i na Podhalu" description='Oferuję profesjonalny petsitting w Nowym Targu. Jako doświadczona opiekunka zapewniam bezpieczne i kochające środowisko dla Twojego pupila w czasie Twojej nieobecności. Skontaktuj się ze mną, a Twój zwierzak będzie w najlepszych rękach!'>
 
      <main class="pt-16 ">
  
          <x-section class="bg2 bg-gray-800">
  
              <x-wrapper id="konsultacje" :title="'Petsitting'" class="px-4 md:px-12">
  
                  <p class=" mt-8  md:mt-12 mb-4 text-base font-normal leading-7">Usługa "petsitting", czyli opieka nad zwierzętami domowymi, to moja pasja i specjalność. Kiedyś dosłownie oznaczała "siedzenie z zwierzęciem", ale dla mnie to znaczy znacznie więcej. To nie tylko praca, to także sposób na budowanie wyjątkowych więzi z czworonogami oraz zapewnianie im miłości i opieki, gdy ich właściciele są nieobecni.</p>
                  <p class=" mt-8  md:mt-12 mb-4 text-base font-normal leading-7">Dla wielu osób opieka nad psem może być wyzwaniem, zwłaszcza gdy wymaga on specjalnej troski - czy to długoterminowej, czy krótkotrwałej, czy też pojedynczego spaceru. Mogę pomóc w zapewnieniu Twojemu psu regularnych spacerów, podawaniu leków o określonych godzinach czy pomóc w zwalczaniu lęku separacyjnego. Jako doświadczony petsitter, rozumiem, jak ważne jest zaspokojenie indywidualnych potrzeb każdego zwierzaka, dlatego dopasowuję moje usługi do wymagań każdego właściciela.</p>
                  
  {{--PHOTOS--}}
                <div class="grid  md:grid-cols-2 gap-6 mt-12">
                  
                  <div class="mt-6 max-h-96 md:opacity-0 animation-trigger--5">
                      <img src="{{ asset('assets/images/podajlapsie_01.webp') }}" :alt="'Piesek leżący na legowisku'" loading='lazy' class="object-cover h-full w-full rounded-md border-2 border-mainColor-400">
                  </div>
                  <div class="md:mt-24 max-h-96 md:opacity-0 animation-trigger--5">
                      <img src="{{ asset('assets/images/podajlapsie_07.webp') }}" :alt="'Piękny pies z wiatrem w kudłach'" loading='lazy' class="object-cover h-full w-full rounded-md border-2 border-mainColor-400">
                  </div>
                </div>
  
  
                        <p class="mt-8  md:mt-12 mb-4 text-base font-normal leading-7">Zapewniam elastyczność i dostosowuję zakres usług do Twoich oczekiwań. Wystarczy mi powiedzieć, czego potrzebujesz, a ja ustalę odpowiedni dla nas harmonogram spotkań, wizyt czy spacerów. Niezależnie od tego, czy potrzebujesz stałej opieki, czy też jednorazowej pomocy - jestem tu, aby Ci pomóc. Usługi są realizowane w domu klienta, co zapewnia komfort i wygodę, dostosowując się do indywidualnych potrzeb i preferencji.</p>

                        <p class="mt-8  md:mt-12 mb-4 text-base font-normal leading-7">Dodatkowo, zakończyłam kurs z pierwszej pomocy dla psów, co oznacza, że Twoje zwierzę jest ze mną w bezpiecznych rękach. A jeśli zdecydujesz się na moje usługi petsittingowe, oferuję Ci darmową poradę behawioralną podczas pierwszej wizyty. Dla mnie nie chodzi tylko o zapewnienie opieki, ale także o pomoc w budowaniu pozytywnych zachowań i relacji między Tobą a Twoim zwierzakiem.</p>
  
                        <p class="mt-8  md:mt-12  mb-2 text-base font-normal leading-7">
                            Jeśli chcesz, aby Twoje zwierzę było w dobrych rękach, możesz być pewny, że z miłością i zaangażowaniem zajmę się Twoim pupilem. Skontaktuj się ze mną, a razem stworzymy harmonogram opieki, który będzie idealnie odpowiadał Twoim potrzebom.
                      </p>
  
                  
                      
              <x-link-btn :href="route('contact.index')" class="md:px-24 md:py-4 text-xl mt-12">
                Zamów konsultacje
              </x-sectionWrapper>
  
               
            </x-buttons.btnPrimary>
          </x-sectionBg>
  
  
      </main>
  </x-layouts.master>
  