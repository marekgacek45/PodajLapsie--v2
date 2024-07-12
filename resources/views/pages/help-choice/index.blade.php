<x-layouts.app title="Podaj Łapsie - Profesjonalna Pomoc w Wyborze Psa | Ekspert w Nowym Targu i na Podhalu" description='Znajdź idealnego pupila dzięki naszej profesjonalnej pomocy w wyborze psa. Jako ekspert ds. zachowania psów w Nowym Targu oferuję wsparcie i wskazówki, które pomogą Ci znaleźć psa, który najlepiej pasuje do Twojego stylu życia. Skonsultuj się ze mną już dziś!'>
   
      <main class="pt-16 ">
  
          <x-section class="bg2 bg-gray-800">
  
              <x-wrapper id="konsultacje" :title="'Profesjonalna pomoc w wyborze psa'" class="px-4 md:px-12">
  
                  <p class=" mt-8  md:mt-12 mb-4 text-base font-normal leading-7">Oferuję profesjonalną pomoc w wyborze idealnego psa, biorąc pod uwagę wiele istotnych czynników, które będą kluczowe dla udanego związku między Tobą a nowym członkiem rodziny. Wybór psa to proces, który wymaga zrozumienia temperamentu, potrzeb rasy, żywiołowości i charakteru zwierzaka. To od dopasowania tych elementów zależy, jak będzie wyglądać nasze codzienne życie z czworonogiem.</p>
                  <p class=" mt-8  md:mt-12 mb-4 text-base font-normal leading-7">Moja usługa polega na zbieraniu niezbędnych informacji o Tobie, Twoim trybie życia, cyklu dnia oraz preferencjach dotyczących ras psów, które Cię interesują. Na podstawie tych danych dokładnie analizuję dostępne rasy i pomagam Ci znaleźć takiego psa, który najlepiej odpowiada Twoim potrzebom i oczekiwaniom. Wybieram również odpowiednią hodowlę, zapewniającą zdrowego szczeniaka z jak najmniejszym ryzykiem chorób genetycznych.</p>
                  
  {{--PHOTOS--}}
                <div class="grid  md:grid-cols-2 gap-6 mt-12">
                  
                  <div class="mt-6 max-h-96 md:opacity-0 animation-trigger--5">
                      <img src="{{ asset('assets/images/stock/podajlapsie_stock_01.webp') }}" :alt="'Piesek leżący na legowisku'" loading='lazy' class="object-cover h-full w-full rounded-md border-2 border-mainColor-400">
                  </div>
                  <div class="md:mt-24 max-h-96 md:opacity-0 animation-trigger--5">
                      <img src="{{ asset('assets/images/stock/podajlapsie_stock_02.webp') }}" :alt="'Piękny pies z wiatrem w kudłach'" loading='lazy' class="object-cover h-full w-full rounded-md border-2 border-mainColor-400">
                  </div>
                </div>
  
  
                        <p class="mt-8  md:mt-12 mb-4 text-base font-normal leading-7">A co, jeśli marzysz o psie ze schroniska? To żaden problem! Razem udajemy się do schroniska, gdzie na podstawie informacji od pracowników oraz po spacerze z psem, pomagam Ci wybrać idealnego towarzysza.</p>

                        <p class="mt-8  md:mt-12 mb-4 text-base font-normal leading-7"><strong class="font-bold text-xl">Jeśli zdecydujesz się na adopcję schroniskowego zwierzaka przy moim wsparciu, oferuję dla niego dożywotnią zniżkę w wysokości 20% na konsultacje behawioralne, a pierwsza konsultacja po dwóch tygodniach jest gratis!</strong></p>
  
                        <p class="mt-8  md:mt-12  mb-2 text-base font-normal leading-7">
                            Z moją pomocą zapewniam Ci, że przed Wami teraz mnóstwo wspólnych, szczęśliwych lat z nowym członkiem rodziny. Nie wahaj się skorzystać z mojej wiedzy i doświadczenia, aby znaleźć psa, który doskonale wpasuje się w Twój styl życia i przyniesie radość do Twojego domu.
                      </p>
  
                  
                      
              <x-link-btn :href="route('contact.index')" class="md:px-24 md:py-4 text-xl mt-12">
                Zamów konsultacje
              </x-link-btn>
              </x-sectionWrapper>
  
               
          </x-sectionBg>
  
  
      </main>
  </x-layouts.master>
  