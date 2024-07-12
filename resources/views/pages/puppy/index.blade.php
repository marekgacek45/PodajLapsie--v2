<x-layouts.app title="Podaj Łapsie - Budowanie relacji ze szczeniakiem, szkolenie psów w Nowym Targu i na Podhalu" description='Zarezerwuj konsultacje behawiorystyczne i szkoleniowe z doświadczonym ekspertem ds. zachowania psów w Nowym Targu. Oferuję profesjonalne porady oraz indywidualne podejście, które pomogą w poprawie zachowania Twojego pupila.'>
    
      <main class="pt-16 ">
  
          <x-section class="bg2 bg-gray-800">
  
              <x-wrapper id="konsultacje" :title="'Budowanie więzi i relacji'" class="px-4 md:px-12">
  
                  <p class=" mt-8  md:mt-12 mb-4 text-base font-normal leading-7">Jeśli masz szczeniaka i nie jesteś pewien, co robić teraz, albo rozważasz adopcję tej małej kuleczki, jestem tu, aby Ci pomóc. Warto rozpocząć pracę nad pewnymi zachowaniami od samego początku, gdyż jest to znacznie łatwiejsze niż próba modyfikacji zachowań i nawyków dorosłego psa. W ramach moich usług oferuję kompleksowe wsparcie, które obejmuje dobór odpowiednich akcesoriów, takich jak szeleczki, obroże, smycze, oraz wysokiej jakości karmę. Ponadto, pomożemy Ci przygotować wyprawkę dla Twojego pupila.</p>
                  
  {{--PHOTOS--}}
                <div class="grid  md:grid-cols-2 gap-6 mt-12">
                  
                  <div class="mt-6 max-h-96 md:opacity-0 animation-trigger--5">
                      <img src="{{ asset('assets/images/stock/podajlapsie_puppy_01.webp') }}" :alt="'Kilka słodkich małych szczeniaczków'" loading='lazy' class="object-cover h-full w-full rounded-md border-2 border-mainColor-400">
                  </div>
                  <div class="md:mt-24 max-h-96 md:opacity-0 animation-trigger--5">
                      <img src="{{ asset('assets/images/stock/podajlapsie_puppy_03.webp') }}" :alt="'Mały sczeniak żujący lotkę do badmintona'" loading='lazy' class="object-cover h-full w-full rounded-md border-2 border-mainColor-400">
                  </div>
                </div>
  
  
                        <p class="mt-8  md:mt-12 mb-4 text-base font-normal leading-7">Dodatkowo, udzielę Ci cennych wskazówek, jak wychować szczeniaka w sposób jak najbardziej efektywny, minimalizując ryzyko wystąpienia problemów w dorosłym życiu. Nauczę Cię, jak reagować na konkretne zachowania, aby te niepożądane nie nasilały się, a te pożądane mogły się rozwijać. Razem zbudujemy silną więź między Tobą a Twoim psem, co znacznie ułatwi życie codzienne.</p>
  
                        <p class="mt-8  md:mt-12  mb-2 text-base font-normal leading-7">
  
                            Nasza oferta usług jest elastyczna i dostosowana do Twoich potrzeb. Jeśli na przykład potrzebujesz tylko pomocy w nauce chodzenia na smyczy, nie musisz korzystać z całego pakietu. Jesteśmy tu, aby pomóc Ci i Twojemu pupilowi osiągnąć harmonię i zrozumienie.

                      </p>
  
                  
                      
              <x-link-btn :href="route('contact.index')" class="md:px-24 md:py-4 text-xl mt-12">
                Zamów konsultacje
            </x-link-btn>
              </x-sectionWrapper>
  
               
          </x-sectionBg>
  
  
      </main>
  </x-layouts.master>
  