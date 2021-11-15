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
                <span class="block text-6xl text-left  font-concourset7 leading-snug font-normal-400 tracking-normal text-white">Outsource Better</span>
              </h1>
              <p class="mt-3 font-copy text-xl font-normal-400 tracking-normal leading-relaxed text-left text-white sm:mt-5">
              Lambent dives into your business with expertise to streamline <br> your work-flow and teams to get the job done. To learn more, schedule a call to discuss how we can help you accomplish more with less.
              </p>
              <div class="mt-5">
                <form action="#" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                  <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                      <div>
                <div class="mt-1">
                  <input type="text" placeholder="First Name" name="first-name" id="first-name" autocomplete="given-name" class="block w-full py-3.5 px-4 font-concourset3 text-xl font-normal-400 tracking-normal leading-relaxed normal-case shadow-sm s focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div>
                <div class="mt-1">
                  <input type="text" placeholder="Last Name" name="last-name" id="last-name" autocomplete="family-name" class="block w-full font-concourset3 text-xl font-normal-400 tracking-normal leading-relaxed normal-case  py-3.5 px-4 shadow-sm  focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="mt-1">
                  <input id="email" placeholder="Email" name="email" type="email" autocomplete="email" class="block w-full font-concourset3 text-xl font-normal-400 tracking-normal leading-relaxed normal-case  py-3.5 px-4 shadow-sm  focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                    <div class="mt-1">
                      <button type="submit" class="block w-full py-3 px-6 font-concourset6 text-lg font-normal tracking-normal leading-normal align-middle px-5 rounded-md shadow bg-newgrowth-300 text-white font-medium hover:bg-newgrowth-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">Let's Talk</button>
                    </div>
                </div>
                  </div>
                  <p class="mt-3 font-concourset3 font-normal tracking-normal leading-relaxed normal-case text-xs text-gray-300 sm:mt-4">By providing your email, you agree to our <a href="#" class="font-medium text-white">terms of service</a>.</p>
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
          <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600 opacity-90"></div>
          <div class="relative px-8">
            
            <blockquote class="mt-8">
              <div class="relative text-lg font-medium text-white md:flex-grow">
                
                <p class="relative  font-copy text-xl font-normal tracking-normal leading-relaxed text-white normal-case">
                  Tincidunt integer commodo, cursus etiam aliquam neque, et. Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat dignissim id lobortis amet.
                </p>
              </div>

              <footer class="mt-4">
                <p class="text-base font-concourset3 text-xs font-normal leading-relaxed text-lamblue-100 normal-case">Harry Fozzard, Founder Lambent Consulting</p>
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
      <!-- Content area -->
      <div class="pt-12 sm:pt-16 lg:pt-20">
        <h2 class="text-4xl text-left  text-black font-normal-600 tracking-normal leading-snug font-concourset7 capitalize">
        Teams, Processes, & Tools
        </h2>
        <div class="mt-6 text-lambright-50 font-normal-400 tracking-normal leading-normal  space-y-6">
          <p class="text-xl text-left tracking-normal font-normal leading-relaxed normal-case font-copy">
          We build, staff, and manage processes for Small to Medium-sized organizations. Solid support — back-office administration, customer service, online marketing — returns time, blood, and treasure back to you to do with as you choose.  We know the difference between “making it” and unqualified success.   
          </p>
          <p class="text-xl text-left tracking-normal font-normal leading-relaxed normal-case font-copy">
          Streamlined, high-quality offshore programs start with a comprehensive understanding of your work and objectives. When you work with Lambent, we dig in to understand the processes you need to accomplish your goals. We document this knowledge to build tools and techniques that eliminate waste and accelerate results.  
          </p>
          <p class="text-xl text-left tracking-normal font-normal leading-relaxed normal-case font-copy">
          Staffing from the Philippines starts with the promise of lower rates. We find that our clients quickly appreciate our reliability and tenacious work ethic. Lambent teams stick around for the long haul, and this is the alchemy of experience becoming expertise. Many of our clients regard their Philippines team as leading actors in their business.
          </p>
          <p class="text-xl text-left tracking-normal font-normal leading-relaxed normal-case font-copy">
          Once launched, Lambent management invests regular effort to make your program even better. All business processes occasionally succumb to entropy. Our management philosophy and approach tackle this head-on with reporting that drives right to the heart of your desired outcome. We build rational measures for success and constantly test them against tangible results like customer retention, new business, and task completion.
          </p>
        </div>
      </div>

      <!-- Stats section -->
      <div class="mt-10">
        <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
          <div class="border-t-2 border-gray-100 pt-6">
            <dt class=" font-councourset3 text-xs font-normal  tracking-normal leading-relaxed text-newgrowth-100">Founded</dt>
            <dd class="font-concourset6 text-3xl font-normal tracking-normal leading-normal text-black normal-case">2006</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="font-councourset3 text-xs font-normal  tracking-normal leading-relaxed text-newgrowth-100">Employees</dt>
            <dd class="font-concourset6 text-3xl font-normal tracking-normal leading-normal text-black normal-case">47</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="font-councourset3 text-xs font-normal  tracking-normal leading-relaxed text-newgrowth-100">Managed Processes</dt>
            <dd class="font-concourset6 text-3xl font-normal tracking-normal leading-normal text-black normal-case">22</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="font-councourset3 text-xs font-normal  tracking-normal leading-relaxed text-newgrowth-100">Av. Program Life</dt>
            <dd class="font-concourset6 text-3xl font-normal tracking-normal leading-normal text-black normal-case">4.2 Years</dd>
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

<div class="relative bg-lamblue-50 py-16 sm:py-24 lg:py-32">
  <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <h2 class="text-lambright-600 font-concourset6 text-3xl font-normal tracking-normal leading-normal normal-case ">Get happy</h2>
    <p class="font-concourset7 text-3xl font-normal tracking-normal leading-snug capitalize">
    Outsource Your Back-office
    </p>
    <p class="font-copy text-xl font-normal tracking-normal leading-relaxed text-black normal-case">
    We’ve grouped our services into standard bundles yet our clients normally build their services according to specific needs. No two programs are alike beyond our standard process design and rigorous team selection and training.
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
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Online Marketing</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newgrowth-100">
              Build your audience and stay engaged. Strategy, design, scheduled updates, list development, CRM management.
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
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Customer Experience</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newgrowth-100">
              Keep your customers and them happy with best-in-class CX. Support across all channels and self-service platforms.
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
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Back-office Admin</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newgrowth-100">
              Offload any task and make it more efficient. Teams and processes support for any administrative function.
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
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Data Collection</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newgrowth-100">
              Expand or enhance your list with updates and additional data points. Data mining, tele-surveys, data verification, and append.
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
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Documentation & Learning</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newgrowth-100">
              Leverage Lambent’s process development for your organization. process maps, operating procedures, and online training.
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
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Content Moderation</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newgrowth-100">
              Keep your community safe. Maintain your online assets. Social monitoring and moderation, image preparation and curation
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
      <h2 class="font-concourset7 text-3xl font-normal tracking-normal leading-snug text-newcolor-50 sm:text-4xl">
      Lambent Illuminations
      </h2>
      <p class="mt-3 max-w-2xl mx-auto font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-100 normal-case sm:mt-4">
      Resources and information for outsourcers and businesses. Leverage our process experience with insights into outsourcing best practices, the Philippines, and tools for work.
      </p>
    </div>
    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="/images/LAMB-Site-Image-Home-IlluminationsPhils.jpg" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
          
            <a href="https://lambent.co/tag/philippines/ " class="block mt-2">
              <p class="font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-100">
              Philippines
              </p>
              <p class="mt-3 font-copy2 text-base font-normal tracking-normal leading-relaxed normal-case">
              All about the Philippines. Learn about the local outsourcing landscape, culture insights, business operations, and more. Benefit from two decades of business process outsourcing and call center operations in the world capital of outsourcing.
              </p>
            </a>
          </div>
          
        </div>
      </div>

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="/images/LAMB-Site-Image-Home-Illuminations_Outsourcing.jpg" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
          
            <a href="https://lambent.co/tag/business-process-outsourcing/" class="block mt-2">
              <p class="font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-100">
              Outsourcing
              </p>
              <p class="mt-3 font-copy2 text-base font-normal tracking-normal leading-relaxed normal-case">
              Real-life commentary, ideas, and tools for those outsourcing and those about to outsource. An excellent resource for team managers, corporate trainers, entrepreneurs, and solopreneurs who want insights into better operations.
              </p>
            </a>
          </div>
          
        </div>
      </div>

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="/images/LAMB-Site-Image-Home-Illuminations_Work.jpg" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            
            <a href="https://lambent.co/tag/case-study/" class="block mt-2">
              <p class="font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-100">
              Work
              </p>
              <p class="mt-3 font-copy2 text-base font-normal tracking-normal leading-relaxed normal-case">
              Work we do for our clients, dispatches from the factory floor, challenges and broad overviews of process work we’ve documented. Understand what we do and why we do it to keep clients for lengthy productive engagements.
              </p>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>




@endsection