<nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
            <span class="sr-only">Dawnbreaker Cleaning</span>
            <img class="h-32 w-auto" src="images/dawnbreaker_cleaning_logo.svg"
                 alt="Dawnbreaker cleaning logo">

        </a>
    </div>
    <div class="flex lg:hidden">
        <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                 aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
        <a href="{{ route('commercial') }}" class="text-sm font-semibold leading-6 text-gray-900">Commercial</a>
        <a href="{{ route('residential') }}" class="text-sm font-semibold leading-6 text-gray-900">Residential</a>
        <a href="{{ route('about') }}" class="text-sm font-semibold leading-6 text-gray-900">About</a>
        <a href="{{ route('company') }}" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <svg xmlns="http://www.w3.org/2000/svg" fill="true" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
        </svg>
        &nbsp;
        <a href="#" class="text-sm font-semibold leading-6 text-purple-800">801-630-8999</a>
    </div>
</nav>

