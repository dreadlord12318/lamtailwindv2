
<nav class = "bg-lambright-500 max-w-full z-40 fixed left-0 right-0">
    <div x-data="{ isOpen: false }" class=" md:max-w-7xl lg:max-w-7xl  mx-auto py-6 px-6 md:px-0 md:flex md:justify-between md:items-center">
        <div class="flex justify-between pl-6 items-center">
            <div class="flex items-center">
            <a href="/">
            <span class="sr-only">Lambent</span>
            <img class="h-8 w-auto sm:h-10" src="images/LAMB-Site-Image-AvatarLight.svg" alt="">
          </a>
            </div>
            <div class="flex md:hidden">
                <button type="button"
                 class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-grape-500"
                 aria-label="toggle menu"
                 x-on:click="isOpen = !isOpen">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                </button>
            </div>
            <div class="hidden md:block md:ml-4 space-x-10 lg:flex lg:ml-4">
            <a href="/about" class="text-lg text-white font-concoursec6 text-center font-normal leading-normal tracking-normal hover:text-newgrowth-100">About</a>

<a href="/pricing" class="text-lg text-white font-concoursec6 text-center font-normal leading-normal tracking-normal hover:text-newgrowth-100">Pricing</a>

<a href="/illuminations" class="text-lg text-white font-concoursec6 font-normal leading-normal tracking-normal text-center hover:text-newgrowth-100">Illuminations</a>

<a href="/contact" class="text-lg text-white font-concoursec6 font-normal leading-normal tracking-normal text-center hover:text-newgrowth-100">Contact</a>
        </div>
        </div>
        <!-- Menu Mobile -->
        <div x-show="isOpen" class="md:flex items-center">
            <div class="flex flex-wrap justify-around content-around md:hidden flex-col md:flex-row md:ml-6">
            <a href="/about" class="text-lg text-white font-concoursec6 text-center font-normal leading-normal tracking-normal hover:text-newgrowth-100">About</a>

<a href="/pricing" class="text-lg text-white font-concoursec6 text-center font-normal leading-normal tracking-normal hover:text-newgrowth-100">Pricing</a>

<a href="/illuminations" class="text-lg text-white font-concoursec6 font-normal leading-normal tracking-normal text-center hover:text-newgrowth-100">Illuminations</a>

<a href="/contact" class="text-lg text-white font-concoursec6 font-normal leading-normal tracking-normal text-center hover:text-newgrowth-100">Contact</a>
            </div>
        </div>
    </div>

</nav>
