<div class="flex flex-col md:flex-row gap-8 justify-between">
    <!-- LATEST POST -->
    <div class="w-full md:w-1/2">
        <a href="{{ route('blog.show', $posts[0]->slug) }}" class="flex flex-col justify-start items-start gap-4">
            <img src="{{ $posts[0]->getThumbnailUrl() }}"
                alt="Miniaturka artykułu o tytule {{ $posts[0]->title }}"
                class="max-h-[350px] min-h-[350px] w-full object-cover">
            <span class="font-light text-sm text-gray-600">{{ $posts[0]->getPublishedDate() }}</span>
            <h2 class="text-4xl font-semibold">{{ $posts[0]->title }}</h2>
            <span class="font-normal">{{ $posts[0]->getExcerpt() }}</span>
        </a>
    </div>

    <!-- OTHER 3 POSTS -->
    <div class="flex flex-col w-full md:w-1/2 gap-8 md:gap-4">
        @foreach ($posts->slice(1,3) as $post)
            <div class="md:p-4">
                <a href="{{ route('blog.show', $post->slug) }}" class="flex gap-4 md:gap-6">
                    <div class="w-1/2 self-center md:self-start">
                        <img src="{{ $post->getThumbnailUrl() }}" alt="Miniaturka artykułu o tytule {{ $post->title }}"
                            class="max-h-[150px] min-h-[150px] w-full object-cover">
                    </div>
                    <div class="w-1/2 space-y-5">
                        <span class="font-light text-sm text-gray-600">{{ $post->getPublishedDate() }}</span>
                        <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                    </div>
                </a>
            </div>
            @unless ($loop->last)
                <hr class="border border-mainColor-400">
            @endunless
        @endforeach
    </div>
</div>
