@extends('layouts.app')

@section('content')

@include('header')

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
    


    <main class="lg:mt-8 sm:mt-24">
    <div class="pt-10 bg-lambright-500 sm:pt-14 lg:pt-8 lg:pb-20 lg:overflow-hidden">
      <div class="mx-auto max-w-7xl lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
              <div class="lg:py-24">
              
              <h1 class="mt-4  sm:mt-5 sm:text-6xl ">
                <span class="block text-6xl text-left  font-concourset7  leading-snug font-normal tracking-normal text-white normal-case">Do More…Work Less </span>
              </h1>
              <p class="mt-3 font-copy text-xl font-normal-400 tracking-normal leading-relaxed text-left text-white normal-case sm:mt-5">
              Gain productivity superpowers with your managed virtual assistant.  <br> Your dedicated account manager coordinates your tasks every week, matches them with our pool of experts, and your workflow turns into a supercharged productivity machine.   
              </p>
		          <div class="mt-10 sm:mt-12">
              <img class="w-44 mt-3 md:center " src="images/LAMB - Proof Image - Clutch Review.svg" alt="">
              <!--  -->
               
              </div>
            </div>
          
         
          </div>
          <div class=" bg-blend-overlay -mb-16 -top-40 sm:-mb-48 lg:m-0 lg:relative">
            <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
              <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
              <img class="ml-24  w-11/12 lg:absolute lg:inset-y-0 lg:left " src="images/LAMB-Site-Image-Home_HeaderIso.svg" alt="">
              <!-- <div class="absolute inset-0 bg-lambright-600 mix-blend-lighten" aria-hidden="true"></div> -->
            </div>
          </div>
        </div>
        </div>

    </main>
  </div>
</div>

<!-- Split with image -->




<!-- Content: with testimonials and stats -->


<div class="relative bg-newcolor-700 py-16 sm:py-24">
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
          <img class="absolute inset-0 h-full w-full object-cover" src="images/LAMB-Site-Image-Home_Founder.jpg" alt="">
          <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600 opacity-90"></div>
          <div class="relative px-8">
            
            <blockquote class="mt-8">
              <div class="relative text-lg font-medium text-white md:flex-grow">
                
                <p class="relative  font-copy text-xl font-normal tracking-normal leading-relaxed text-white normal-case">
                Lambent and our Philippines entity, Lumikha, are purpose-built for growing business. We craft detailed processes to eliminate the unnecessary and accentuate value. Our clients come for the cost value and stay for the productive value.
                </p>
              </div>

              <footer class="mt-4">
                <p class=" font-concourset3 text-xs font-normal leading-relaxed text-newcolor-700 normal-case">Harry Fozzard, Founder Lambent Consulting</p>
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
        <div class="mt-6 text-newcolor-800 font-normal-400 tracking-normal leading-normal  space-y-6">
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
            <dt class=" font-concourset3 text-xs font-normal  tracking-normal leading-relaxed text-newcolor-200">Founded</dt>
            <dd class="font-concourset6 text-3xl font-normal tracking-normal leading-normal text-black normal-case">2006</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="font-concourset3 text-xs font-normal  tracking-normal leading-relaxed text-newcolor-200">Employees</dt>
            <dd class="font-concourset6 text-3xl font-normal tracking-normal leading-normal text-black normal-case">47</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="font-concourset3 text-xs font-normal  tracking-normal leading-relaxed text-newcolor-200">Managed Processes</dt>
            <dd class="font-concourset6 text-3xl font-normal tracking-normal leading-normal text-black normal-case">22</dd>
          </div>

          <div class="border-t-2 border-gray-100 pt-6">
            <dt class="font-concourset3 text-xs font-normal  tracking-normal leading-relaxed text-newcolor-200">Av. Program Life</dt>
            <dd class="font-concourset6 text-3xl font-normal tracking-normal leading-normal text-black normal-case">4.2 Years</dd>
          </div>
        </dl>
     
      </div>
    </div>
  </div>
</div>


<!-- Features: Grid with offset icons -->

<div class="relative bg-lamblue-50 py-16 sm:py-24 lg:pt-24 lg:pb-24">
  <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <h2 class="text-lambright-600 font-concourset6 text-base font-normal tracking-normal leading-normal uppercase">OF COURSE IT WILL</h2>
    <p class="font-concourset7 text-3xl font-normal tracking-normal leading-snug capitalize">
    Will it Outsource? 
    </p>
    <p class="font-copy text-xl font-normal tracking-normal leading-relaxed text-black normal-case">
    If you want it off your plate, we can do it. Most folks want to accomplish more in one of these standard categories. Hundreds of documented operating procedures plus thousands of hours in the trenches delivering customer work mean you can outsource confidently and get on with your day. 
    </p>
    <div class="mt-12">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-lambright-500 rounded-md shadow-lg">
                  <!-- Heroicon name: outline/cloud-upload -->
                  <svg class = "h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Online Marketing</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
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
                  <svg class = "h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Customer Experience</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
              Keep your customers and keep them happy with best-in-class CX. Support across all channels and self-service platforms.
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
                  <svg class = "h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Back-office Admin</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
              Offload any task and make it more efficient.  Teams and processes support any administrative function.
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
                  <svg class = "h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Data Collection</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
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
                  <svg class = "h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Documentation & Learning</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
              Leverage Lambent’s process development for your organization: process maps, operating procedures, and online training. 
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
                  <svg class = "h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 font-concourset4 text-2xl font-normal tracking-normal leading-snug font-newcolor-50">Content Moderation</h3>
              <p class="mt-5 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
              Safeguard your community. Maintain your online assets: social monitoring and moderation, image preparation, and curation
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Testimonials: with Background -->

<slider></slider>





<!-- Blog: 3-column cards -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-lamblue-50 pt-16 pb-14 px-4 sm:px-6 lg:pt-24 lg:pb-24 lg:px-8">
  <div class="absolute inset-0">
    <div class="bg-lamblue-50 h-1/3 sm:h-2/3"></div>
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
              <p class="font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-100">
              Philippines
              </p>
              <p class="mt-3 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200 normal-case">
              All about the Philippines. Learn about the local outsourcing landscape, culture insights, business operations, and more. Benefit from two decades of business process outsourcing and call center operations in the world capital of outsourcing.
              </p>
          </div>
          <div class="flex flex-row justify-start mt-4">
          <a href = "https://lambent.co/tag/philippines/" class="font-copy2 text-base font-normal tracking-normal leading-loose text-newgrowth-400 normal-case">
              Read More
            </a >
          </div>
        </div>
      </div>

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="/images/LAMB-Site-Image-Home-Illuminations_Outsourcing.jpg" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
              <p class="font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-100">
              Outsourcing
              </p>
              <p class="mt-3 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200 normal-case">
              Real-life commentary, ideas, and tools for those outsourcing and those about to outsource. An excellent resource for team managers, corporate trainers, entrepreneurs, and solopreneurs who want insights into better operations.
              </p>
          </div>
          <div class="flex flex-row justify-start mt-4">
          <a href="https://lambent.co/tag/business-process-outsourcing/" class="font-copy2 text-base font-normal tracking-normal leading-loose text-newgrowth-400 normal-case">
              Read More
            </a >
          </div>
        </div>
      </div>

      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="/images/LAMB-Site-Image-Home-Illuminations_Work.jpg" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
              <p class="font-concourset4 text-2xl font-normal tracking-normal leading-snug capitalize text-newcolor-100">
              Work
              </p>
              <p class="mt-3 font-copy2 text-base font-normal tracking-normal text-newcolor-200 leading-relaxed normal-case">
              Work we do for our clients, dispatches from the factory floor, challenges and broad overviews of process work we’ve documented. Understand what we do and why we do it to keep clients for lengthy productive engagements.
              </p>
          </div>
          <div class="flex flex-row justify-start mt-4">
          <a href="https://lambent.co/tag/case-study/" class="font-copy2 text-base font-normal tracking-normal leading-loose text-newgrowth-400 normal-case">
              Read More
          </a >
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection