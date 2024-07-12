<x-layouts.app title='{{$post->title}} | Podaj Łapsie' description='{{$post->getExcerpt()}}'>
   
    <main>

    <div class="pt-32 mx-auto px-4 md:px-12 xl:pt-32  max-w-screen-lg w-full ">
        <img src="{{ $post->getThumbnailUrl() }}" alt="miniaturka posta o tytule {{ $post->title }}"
            class="max-h-[600px] w-full object-cover">
    </div>
    <article class="prose max-w-screen-2xl mx-auto text-white post">



        <div class="flex flex-col justify-center items-center px-4 lg:px-0">

            <div class="mb-5 flex flex-col justify-center items-center text-center">
                <h2 class="font-bold text-2xl md:text-4xl mb-5 text-white">{{ $post->title }}</h2>



                <span>{{ $post->getPublishedDate() }}</span>
                <div  class="my-6 max-w-screen-md text-left">
                    {!! $post->content !!}
                </div>
                <p></p>
            </div>

        </div>
    </article>

    <div class="max-w-screen-xl mx-auto mb-16">
        <h2 class="text-3xl font-semibold text-center">Zobacz inne artykuły</h2>
        <div class="sm:grid md:grid-cols-2 lg:grid-cols-3 mt-8 gap-12">
            @foreach ($latestPosts as $post)
            <x-blog.post-card :post="$post" :excerpt=false />
            @endforeach
        </div>
    </div>

</main>

</x-layouts.app>