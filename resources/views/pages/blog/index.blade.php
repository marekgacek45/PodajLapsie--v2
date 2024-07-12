<x-layouts.app title="Podaj Łapsie - Blog dla Miłośników Czworonogów" description="Zapraszam do odkrywania tajemnic psiego zachowania i oraz poznawania ciekawostek na moim blogu.">
  

    <main class="pt-16 md:pt-24 container max-w-screen-xl flex flex-col justify-between mx-auto p-10 xl:pt-32">

        <section class="space-y-8 mb-12">
            <h1 class="text-3xl font-semibold">Najnowsze posty</h1>
            <x-blog.latest-posts :posts="$posts" />
        </section>

        <hr class="border border-mainColor-400">

        <section class="mt-2">
            
            <x-blog.post-grid :posts="$posts" />
        </section>
        {{$posts->links('vendor.pagination.tailwind')}}

    </main>
</x-layouts.app>