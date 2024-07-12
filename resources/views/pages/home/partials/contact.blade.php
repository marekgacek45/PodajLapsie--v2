<x-section class="bg2 bg-gray-800">
    <x-section  id="kontakt" :title="'Skontaktuj się ze mną'" class=" min-w-full  py-24 mb-0">
    
    
        {{--  CONTAINER--}}
        <div class="mx-2 xs:mx-6 lg:mx-auto max-w-screen-xl rounded-md bg-black lg:bg-transparent">
        
        <div class=" flex lg:block flex-col relative sm:m-2   rounded-md  lg:bg-transparent text-black">
              {{-- CONTACT FORM--}}
        <div class="mt-10 md:mt-14 xs:m-6 px-3 md:px-12 py-6 lg:w-1/2 lg:border-4 border-black rounded-md  bg-mainColor-400 overflow-hidden order-2 lg:order-1 md:opacity-0 animation-trigger--2">
            <livewire:contact-form/>

        </div>
        
    
         {{--INFO CARD--}}
        <div class="lg:absolute w-full lg:w-1/2 lg:top-1/2 lg:right-1  lg:transform lg:-translate-y-1/2 mt-12 lg:mt-0 md:px-12 md:mb-12 lg:mb-0 lg:p-12  bg-black text-white rounded-md z-10 order-1 lg:order-2 md:opacity-0 animation-trigger">
            <h3 class="lg:mb-3 text-2xl xs:text-3xl lg:text-4xl font-semibold ">Kontakt</h3>
            <div class="flex flex-col p-4 sm:px-8 lg:px-2 xl:px-6 space-y-2 sm:space-y-3 lg:space-y-5 text-center text-base font-light ">
                <span class="font-bold text-mainColor-400">Masz pytania lub chciałabyś się ze mną skonsultować?</span>
                <span> Jestem dostępna na różne sposoby. Możesz skorzystać z mojego wygodnego formularza kontaktowego, napisać do mnie maila, zadzwonić pod podany numer telefonu lub też śledzić mnie na mediach społecznościowych.</span>
                <span class="font-bold text-mainColor-400">Jestem tu dla Ciebie, aby Ci pomóc!</span>
            </div>
           
            <div class="flex flex-col justify-start items-center">
                
                <div class="flex flex-col justify-start items-start gap-2">
    
                    <a href="tel:727700575" class="flex justify-evenly  items-center gap-4 font-bold transform transition-all hover:scale-110 "> <img width="42px" src="{{asset('images/assets/icons/phone.png')}}" alt="ikonka telefonu">727-700-575</a>
                   
                        
                        <a href="mailto:kontakt@podajlapsie.pl"  class="flex justify-evenly  items-center gap-4 font-bold transform transition-all hover:scale-110   "><img  width="42px" src="{{asset('images/assets/icons/envelope.png')}}" alt="ikonka koperty" >kontakt@podajlapsie.pl</a></div>
                    
                
            </div>
           
            <div class=" mt-5 w-full text-center">
                <span class="font-bold text-mainColor-400 ">Zapraszam na swoje Social Media:</span>
                <x-social--light class="flex mt-4"/>
            </div>
            
        </div>
        </div>
    </div>
        </x-section>
    </x-section>
        