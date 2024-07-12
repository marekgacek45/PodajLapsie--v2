
<x-layouts.app title="Podaj Łapsie -  Galeria | Behawiorysta i Szkolenie Psów w Nowym Targu i na Podhalu" description='Zapraszam do przeglądania mojej galerii, gdzie znajdziesz zdjęcia z moich szkoleń, konsultacji behawiorystycznych oraz chwil spędzonych z ukochanymi zwierzakami. Zobacz, jakie postępy osiągają psy pod moją opieką. Daj się zainspirować harmonijnym światem relacji między ludźmi a psami!'>
    
      <main class="pt-10 ">
  
        <x-section class="bg2 bg-gray-800">
            <x-wrapper  id="galeria" :title="'Galeria'" class=" min-w-full  py-24 mb-0">
            
                <div class="grid-wrapper max-w-screen-2xl mx-auto mt-8" >

    
                    @php
                    $availableClasses = ['tall', 'wide', 'big',""];
                    $shuffledImages = $images->shuffle();
                @endphp
                
                @foreach ($shuffledImages as $image)
                @php
                $randomClass = $availableClasses[array_rand($availableClasses)];
                // Definiowanie width i height w oparciu o klasę
                $width = '200'; // domyślny width
                $height = '200'; // domyślny height
        
                if ($randomClass == 'tall') {
                    $width = '150';
                    $height = '300';
                } elseif ($randomClass == 'wide') {
                    $width = '300';
                    $height = '150';
                } elseif ($randomClass == 'big') {
                    $width = '400';
                    $height = '400';
                }
            @endphp

                    @php
                        $randomClass = $availableClasses[array_rand($availableClasses)];
                    @endphp
                
                    <a href="{{ asset($image->getImageUrl()) }}" class="{{ $randomClass }} glightbox">
                        <img src="{{ asset($image->getImageUrl()) }}" alt="Zdjęcie w galerii" loading="lazy" width="{{$width}}" height={{$height}}>
                    </a>
                @endforeach
                
                
                
                </div>
                </x-wrapper>
            </x-section>
                
            
            
            
            
  
  
      </main>
  </x-layouts.app>
  