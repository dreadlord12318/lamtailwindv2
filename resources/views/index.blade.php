@extends('layouts.app')

@section('content')

<nav class = "bg-lambright-500 max-w-full z-40 fixed left-0 right-0">
    <div x-cloak x-data="{ isOpen: false }" class=" md:max-w-7xl lg:max-w-7xl mx-auto py-6 px-6 md:px-0 md:flex md:justify-between md:items-center">
        <div class="flex justify-between items-center">
            <div class="flex pl-6 items-center">
            <a href="/">
            <span class="sr-only">Lambent</span>
            <img class="h-8 w-auto sm:h-10" src="/images/LAMB-Site-Image-AvatarDark.svg" alt="">
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
              <a href="/about" class="text-lg text-white uppercase font-concourset6 text-center font-normal leading-tight tracking-normal hover:text-newgrowth-100">About</a>

              <a href="/pricing" class="text-lg text-white uppercase font-concourset6 text-center font-normal leading-tight tracking-normal hover:text-newgrowth-100">Pricing</a>

              <a href="/illuminations" class="text-lg uppercase text-white font-concourset6 font-normal leading-tight tracking-normal text-center hover:text-newgrowth-100">Illuminations</a>

              <a href="/contact" class="text-lg text-white uppercase font-concourset6 font-normal leading-tight tracking-normal text-center hover:text-newgrowth-100">Contact</a>
            </div>
        </div>
        <!-- Menu Mobile -->
        <div x-show="isOpen" class="md:flex items-center">
            <div class="flex flex-wrap justify-around content-around md:hidden flex-col md:flex-row md:ml-6">
              <a href="/about" class="text-lg text-white uppercase font-concourset6 text-center font-normal leading-normal tracking-normal hover:text-newgrowth-100">About</a>

              <a href="/pricing" class="text-lg text-white uppercase font-concourset6 text-center font-normal leading-normal tracking-normal hover:text-newgrowth-100">Pricing</a>

              <a href="/illuminations" class="text-lg text-white uppercase font-concourset6 font-normal leading-normal tracking-normal text-center hover:text-newgrowth-100">Illuminations</a>

              <a href="/contact" class="text-lg text-white uppercase font-concourset6 font-normal leading-normal tracking-normal text-center hover:text-newgrowth-100">Contact</a>
            </div>
        </div>
    </div>

</nav>

<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

<!-- Hero: With Sign in Form -->
<div class="relative bg-lambright-500 overflow-hidden">
  <div class="hidden sm:block sm:absolute sm:inset-0" aria-hidden="true">
    
  </div>
  <div class="relative pt-6">
    <div>
    


    <main class="mt-16 sm:mt-24">
    <div class="pt-10 bg-lambright-500 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
      <div class="mx-auto max-w-7xl lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
          <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
            <div class="lg:py-24">
              
              <h1 class="mt-4  sm:mt-5 sm:text-6xl ">
                <span class="block text-6xl  font-concourset7 leading-snug font-normal-400 tracking-normal text-white">Outsource Better</span>
              </h1>
              <p class="mt-3 font-copy text-xl font-normal-400 tracking-normal leading-relaxed text-left text-white sm:mt-5">
              Lambent dives into your business with expertise to streamline <br> your work-flow and teams to get the job done. To learn more, schedule a call to discuss how we can help you accomplish more with less.
              </p>
              <div class="mt-5">
                <form action="#" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                  <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                      <div>
                <div class="mt-1">
                  <input type="text" placeholder="First Name" name="first-name" id="first-name" autocomplete="given-name" class="block w-full py-3.5 px-4 shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div>
                <div class="mt-1">
                  <input type="text" placeholder="Last Name" name="last-name" id="last-name" autocomplete="family-name" class="block w-full  py-3.5 px-4 shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="mt-1">
                  <input id="email" placeholder="Email" name="email" type="email" autocomplete="email" class="block w-full  py-3.5 px-4 shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                    <div class="mt-1">
                      <button type="submit" class="block w-full py-3 px-6 font-concourset6 text-lg font-normal tracking-normal leading-normal align-middle px-5 rounded-md shadow bg-newgrowth-300 text-white font-medium hover:bg-newgrowth-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">Let's Talk</button>
                    </div>
                </div>
                  </div>
                  <p class="mt-3 text-sm text-gray-300 sm:mt-4">By providing your email, you agree to our <a href="#" class="font-medium text-white">terms of service</a>.</p>
                </form>
              </div>
            </div>
          </div>
          <div class="mt-12 bg-blend-overlay -mb-16 sm:-mb-48 lg:m-0 lg:relative">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
              <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
              <img class="ml-32 mt-32 w-9/12 lg:absolute lg:inset-y-0 lg:left " src="images/LAMB-Site-Image-Home_HeaderIso.svg" alt="">
              <!-- <div class="absolute inset-0 bg-lambright-600 mix-blend-lighten" aria-hidden="true"></div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>
  </div>
</div>


<!-- Content: with testimonials and stats -->

<div class="relative bg-white py-16 sm:py-24">
  <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
    <div class="relative sm:py-16 lg:py-0">
      <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
        <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
        <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
          <defs>
            <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
        </svg>
      </div>
      <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
        <!-- Testimonial card-->
        <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
          <img class="absolute inset-0 h-full w-full object-cover" src="images/LAMB-Site-Image-Home_FounderGrey.jpg" alt="">
          <div class="absolute inset-0 bg-indigo-500 mix-blend-multiply"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-indigo-500 via-indigo-500 opacity-90"></div>
          <div class="relative px-8">
            <div>
              <img class="h-12" src="https://tailwindui.com/img/logos/workcation.svg?color=white" alt="Workcation">
            </div>
            <blockquote class="mt-8">
              <div class="relative text-lg font-medium text-white md:flex-grow">
                <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-400" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                  <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                </svg>
                <p class="relative">
                  Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis amet.
                </p>
              </div>

              <footer class="mt-4">
                <p class="text-base font-semibold text-indigo-200">Sarah Williams, CEO at Workcation</p>
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
      <!-- Content area -->
      <div class="pt-12 sm:pt-16 lg:pt-20">
        <h2 class="text-4xl text-left normal-case text-black font-normal-600 tracking-normal leading-normal font-concourset6 capitalize">
        Teams, Processes, & Tools
        </h2>
        <div class="mt-6 text-lambright-50 font-normal-400 tracking-normal leading-normal  space-y-6">
          <p class="text-xl text-left tracking-normal leading-relaxed normal-case font-copy">
          We build, staff, and manage processes for Small to Medium-sized organizations. Solid support — back-office administration, customer service, online marketing — returns time, blood, and treasure back to you to do with as you choose.  We know the difference between “making it” and unqualified success.   
          </p>
          <p class="text-xl text-left tracking-normal leading-relaxed normal-case font-copy">
          Streamlined, high-quality offshore programs start with a comprehensive understanding of your work and objectives. When you work with Lambent, we dig in to understand the processes you need to accomplish your goals. We document this knowledge to build tools and techniques that eliminate waste and accelerate results.  
          </p>
          <p class="text-xl text-left tracking-normal leading-relaxed normal-case font-copy">
          Staffing from the Philippines starts with the promise of lower rates. We find that our clients quickly appreciate our reliability and tenacious work ethic. Lambent teams stick around for the long haul, and this is the alchemy of experience becoming expertise. Many of our clients regard their Philippines team as leading actors in their business.
          </p>
          <p class="text-xl text-left tracking-normal leading-relaxed normal-case font-copy">
          Once launched, Lambent management invests regular effort to make your program even better. All business processes occasionally succumb to entropy. Our management philosophy and approach tackle this head-on with reporting that drives right to the heart of your desired outcome. We build rational measures for success and constantly test them against tangible results like customer retention, new business, and task completion.
          </p>
        </div>
      </div>

      <!-- Stats section -->
      <div class="mt-10">
        <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="text-base font-medium text-gray-500">Founded</dt>
            <dd class="text-3xl font-extrabold tracking-tight text-gray-900">2021</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="text-base font-medium text-gray-500">Employees</dt>
            <dd class="text-3xl font-extrabold tracking-tight text-gray-900">5</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="text-base font-medium text-gray-500">Beta Users</dt>
            <dd class="text-3xl font-extrabold tracking-tight text-gray-900">521</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="text-base font-medium text-gray-500">Raised</dt>
            <dd class="text-3xl font-extrabold tracking-tight text-gray-900">$25M</dd>
          </div>
        </dl>
        <div class="mt-10">
          <a href="#" class="text-base font-medium text-indigo-500"> Learn more about how we're changing the world <span aria-hidden="true">&rarr;</span> </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Features: Grid with offset icons -->

<div class="relative bg-white py-16 sm:py-24 lg:py-32">
  <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <h2 class="text-base font-semibold tracking-wider text-indigo-500 uppercase">Deploy faster</h2>
    <p class="mt-2 text-3xl font-extrabold text-black tracking-tight sm:text-4xl">
      Everything you need to deploy your app
    </p>
    <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">
      Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.
    </p>
    <div class="mt-12">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/cloud-upload -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Push to Deploy</h3>
              <p class="mt-5 text-base text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/lock-closed -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">SSL Certificates</h3>
              <p class="mt-5 text-base text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/refresh -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Simple Queues</h3>
              <p class="mt-5 text-base text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/shield-check -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Advanced Security</h3>
              <p class="mt-5 text-base text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/cog -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Powerful API</h3>
              <p class="mt-5 text-base text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/server -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Database Backups</h3>
              <p class="mt-5 text-base text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Testimonials: with Background -->

<!-- <test></test> -->

<div class="bg-white py-16 lg:py-24">
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="relative py-24 px-8 bg-indigo-500 rounded-xl shadow-2xl overflow-hidden lg:px-16 lg:grid lg:grid-cols-2 lg:gap-x-8">
      <div class="absolute inset-0 opacity-50 filter saturate-0 mix-blend-multiply">
        <img src="https://images.unsplash.com/photo-1601381718415-a05fb0a261f3?ixid=MXwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8ODl8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1216&q=80" alt="" class="w-full h-full object-cover">
      </div>
      <div class="relative lg:col-span-1">
        <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workcation-logo-white.svg" alt="">
        <blockquote class="mt-6 text-white">
          <p class="text-xl font-medium sm:text-2xl">Workflow has completely transformed how we interact with customers. We've seen record bookings, higher customer satisfaction, and reduced churn.</p>
          <footer class="mt-6">
            <p class="flex flex-col font-medium">
              <span>Marie Chilvers</span>
              <span>CEO, Workcation</span>
            </p>
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
</div>



<!-- Blog: 3-column cards -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
  <div class="absolute inset-0">
    <div class="bg-white h-1/3 sm:h-2/3"></div>
  </div>
  <div class="relative max-w-7xl mx-auto">
    <div class="text-center">
      <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
        From the blog
      </h2>
      <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
      </p>
    </div>
    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="/images/LAMB-Site-Image-Home-IlluminationsPhils.jpg" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="#" class="hover:underline text-indigo-500">
                Article
              </a>
            </p>
            <a href="#" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">
                Boost your conversion rate
              </p>
              <p class="mt-3 text-base text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
              </p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <span class="sr-only">Roel Aufderehar</span>
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">
                  Roel Aufderehar
                </a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-03-16">
                  Mar 16, 2020
                </time>
                <span aria-hidden="true">
                  &middot;
                </span>
                <span>
                  6 min read
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="/images/LAMB-Site-Image-Home-Illuminations_Outsourcing.jpg" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="#" class="hover:underline text-indigo-500">
                Video
              </a>
            </p>
            <a href="#" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">
                How to use search engine optimization to drive sales
              </p>
              <p class="mt-3 text-base text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.
              </p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <span class="sr-only">Brenna Goyette</span>
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">
                  Brenna Goyette
                </a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-03-10">
                  Mar 10, 2020
                </time>
                <span aria-hidden="true">
                  &middot;
                </span>
                <span>
                  4 min read
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="/images/LAMB-Site-Image-Home-Illuminations_Work.jpg" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="#" class="hover:underline text-indigo-500">
                Case Study
              </a>
            </p>
            <a href="#" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">
                Improve your customer experience
              </p>
              <p class="mt-3 text-base text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.
              </p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <span class="sr-only">Daniela Metz</span>
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">
                  Daniela Metz
                </a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-02-12">
                  Feb 12, 2020
                </time>
                <span aria-hidden="true">
                  &middot;
                </span>
                <span>
                  11 min read
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection