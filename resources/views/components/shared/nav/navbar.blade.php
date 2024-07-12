<nav class=" fixed left-0 right-0 bg-mainColor-500 nav">
    <!-- Container -->
    <div class="flex flex-wrap items-center justify-between mx-auto p-2 max-w-screen-xl">
        <!-- Logo -->
        <x-logo-title />
        <div class="flex md:order-2">
            <!-- Social -->
            <x-social class="hidden lg:flex" />
            <!-- Hamburger -->
            <x-shared.nav.hamburger-btn />

        </div>
        <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1" id="navbar-cta">
            <!-- Nav List -->
            <ul
                class="flex flex-col md:flex-row gap-2 lg:gap-4 p-4 md:p-0 mt-4 md:mt-0 md:space-x-8 bg-mainColor-600 md:bg-transparent md:border-0 rounded-md font-medium ">
                <!-- Nav Item -->
                <x-shared.nav.nav-item href="{{ route('about.index') }}">O mnie</x-shared.nav.nav-item>
                <li class="block md:p-0 text-lg  text-black " aria-current="page">
                    <!-- Dropdown button -->
                    <x-shared.nav.nav-dropdown-btn />
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class=" hidden w-44 bg-black rounded-md  font-normal text-white   z-10">
                        <ul class="py-2 " aria-labelledby="dropdownLargeButton">
                            <x-shared.nav.nav-dropdown-item
                                href="{{ route('consultations.index') }}">Konsultacje</x-shared.nav.nav-dropdown-item>
                            <x-shared.nav.nav-dropdown-item href="{{ route('puppy.index') }}">Budowanie
                                więzi</x-shared.nav.nav-dropdown-item>
                            <x-shared.nav.nav-dropdown-item href="{{ route('choice.index') }}">Pomoc w
                                wyborze</x-shared.nav.nav-dropdown-item>
                            <x-shared.nav.nav-dropdown-item href="{{ route('petsitting.index') }}">Petsitting</x-shared.nav.nav-dropdown-item>
                        </ul>
                    </div>
                </li>
                <!-- Nav Item -->
                <x-shared.nav.nav-item href="{{ route('contact.index') }}">Kontakt</x-shared.nav.nav-item>
                <!-- Nav Item -->
                <x-shared.nav.nav-item href="{{ route('gallery.index') }}">Galeria</x-shared.nav.nav-item>
                <!-- Nav Item -->
                <x-shared.nav.nav-item href="{{ route('blog.index') }}">Blog</x-shared.nav.nav-item>
                <!-- Nav Item -->
                <li>
                    <x-social class="flex md:hidden" />
                </li>
            </ul>
        </div>
    </div>
</nav>
