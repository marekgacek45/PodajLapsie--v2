<div {{$attributes(['class'=>"flex flex-col bg-mainColor-400 rounded-md text-black p-4  md:opacity-0 animation-trigger--4"])}}>
    <img src="{{$src}}"
        alt="{{$alt}}" class="mb-4 lg:mb-2 rounded-md  max-h-[250px] sm:max-h-[350px] md:max-h-[450px] lg:max-h-[300px]
        min-h-[250px] sm:min-h-[350px] md:min-h-[450px] lg:min-h-[300px]  w-full object-cover ">
        <div class="flex flex-col justify-center h-full">

            <h3 class="lg:mb-3 text-2xl xs:text-3xl lg:text-2xl font-semibold sm:mb-2 mt-2">{{$title}}</h3>
            <p class="text-base font-light">{{$slot}}</p>
        </div>
        <x-link-btn-secondary href='{{$href}}' class="my-6">Dowiedz się więcej</x-link-btn-secondary>
        
</div>