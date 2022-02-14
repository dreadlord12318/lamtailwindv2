@extends('layouts.app')

@section('content')


@include('header')



<!-- Header Branded with Background -->

<div class="relative top-16 pb-20 bg-lambright-500">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="images/LAMB-Site-Image-Header-About.jpg" alt="">
    <div class="absolute inset-0 h-full bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-6xl text-left  font-concourset6  leading-tight font-normal tracking-normal text-newcolor-700 capitalize">We’re Ready</h1>
    <p class="mt-6 font-copy text-2xl font-normal tracking-normal leading-normal text-left text-newcolor-700 max-w-3xl">If you’re an entrepreneur, a creator, a leader: you have a dream, a goal. Whatever you’re building, we’re here, ready and waiting to stand shoulder-to-shoulder with you. You bring the inspiration to do something unique, relevant, new, special. We’ll bring the process chops and the team.</p>
  </div>
</div>

<div class="relative py-16 top-12 bg-white overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
    <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
      <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
        <defs>
          <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
      </svg>
      <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
        <defs>
          <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
      </svg>
      <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
        <defs>
          <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
      </svg>
    </div>
  </div>
  <div class="relative px-4 sm:px-6 lg:px-8 bg-newcolor-700">
    <div class="text-lg prose prose-indigo prose-lg text-gray-500 mx-auto text-center">
      <h1>

        <span class="mt-2 block font-concourset6 text-5xl font-normal tracking-normal leading-tight text-newcolor-50 capitalize sm:text-4xl">Possibility</span>
      </h1>
    </div>
    <div class="mt-6 prose prose-indigo  prose-lg font-copy font-normal text-xl tracking-normal leading-relaxed text-lambright-50 normal-case mx-auto">
      <p>Possibility opens the door. It’s the spark of  What if…? of  How can this be better? Each engagement pushes the envelope of possibility to make it a reality. </p>
      <h2 class = "font-concourset6 text-5xl text-center font-normal tracking-normal leading-tight text-newcolor-50 capitalize">Trust</h2>
       <p>The warp and woof of smooth give and take, of timely, quality deliverables, and of decisive, proactive, intelligent operations build trust over time. Trust binds us into a making machine.</p>
       <!-- <figure>
          <div class="relative aspect-w-12 aspect-h-10 overflow-hidden mt-12 mb-14 rounded-lg">
            <img class="absolute inset-0 my-0 lg:mt-0 h-full w-full object-cover" src="images/LAMB-Site-Image-About.jpg" alt="">
              <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
              <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600  opacity-90">
          </div>
          </div>
      </figure> -->
      <h2 class = "font-concourset6 text-5xl text-center font-normal tracking-normal leading-tight text-newcolor-50  capitalize">Our Value</h2>
        <p>Ultimately, we journey to value. Whatever you’re doing, it’s because you believe in its worth to you and the world, in its value. Lambent amplifies your value. </p>
        <h2 class = "font-concourset6 text-5xl text-center font-normal tracking-normal leading-tight text-newcolor-50  capitalize">Learning</h2>
        <p>Learning is the craft for knowing workflow minutiae, building expertise with our tools, and the discipline of unceasing improvement through kaizen. We learn: we keep learning </p>
        <h2 class = "font-concourset6 text-5xl text-center font-normal tracking-normal leading-tight text-newcolor-50  capitalize">Community</h2>
        <p>Lambent is one strand of a community woven from our team, clients, families, neighbors, species, and planet. It’s our job to do right by all of them and to leave the world better than we found it. </p>
        <h2 class = "font-concourset6 text-5xl text-center font-normal tracking-normal leading-tight text-newcolor-50  capitalize">Excellence</h2>
        <p>Excellence is a destination that lies on the horizon. We’re never there because we raise the bar with every success.  </p>
        <figure>
          <div class="relative aspect-w-12 aspect-h-10  overflow-hidden mt-12 mb-14 rounded-lg">
            <img class="absolute inset-0 my-0 lg:mt-0 h-full w-full object-cover" src="images/LAMB-Site-Image-About2.jpg" alt="">
              <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
              <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600  opacity-90">
          </div>
          </div>
      </figure>
      <figcaption class = "font-concourset3 text-sm font-normal tracking-normal leading-snug text-newcolor-200 normal-case">Lambent Actively Supports Remote Area Medical Philippines Missions</figcaption>
    </div>
  </div>
</div>

<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-newcolor-700">
  <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
    <div class="space-y-12">
      <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
        <h2 class="font-concourset6 text-5xl font-normal tracking-normal leading-tight text-newcolor-50 capitalize sm:text-4xl">Leadership </h2>
        <p class="font-copy text-xl font-normal tracking-normal leading-relaxed normal-case text-lambright-50">Before your program starts, there are people who learn about what you want to do, your processes, and your technology stack. People who build the foundation for your program’s success. These are those people. </p>
      </div>
      <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="images/Harry.jpg" alt="">
            </div>

            <div class="space-y-2">
              <div class="space-y-1">
                <h3 class = "font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">Harry Fozzard</h3>
                <p class="font-concoursec3 text-lg font-normal tracking-normal leading-none text-lambright-500 uppercase">Founder</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a target = "_blank" href="https://twitter.com/harryfozzard" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a target = "_blank" href="https://www.linkedin.com/in/harryfozzard/" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="images/Jenny.jpg" alt="">
            </div>

            <div class="space-y-2">
              <div class="space-y-1">
                <h3 class = "font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">Jenny Bertol-Tan</h3>
                <p class="font-concoursec3 text-lg font-normal tracking-normal leading-none text-lambright-500 uppercase">Partner</p>
              </div>
              <ul role="list" class="flex space-x-5">
                
                <li>
                  <a target = "_blank" href="https://www.linkedin.com/in/jennybertol" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="images/Joy%20Dela%20Cruz.jpg" alt="">
            </div>

            <div class="space-y-2">
              <div class="space-y-1">
              <h3 class = "font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">Joy Dela Cruz</h3>
                <p class="font-concoursec3 text-lg font-normal tracking-normal leading-none text-lambright-500 uppercase">Operations</p>
              </div>
              <ul role="list" class="flex space-x-5">
                
                <li>
                  <a target = "_blank" href="https://www.linkedin.com/in/joy-glyph-marie-dela-cruz-65225452" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="images/John%20Paul%20Oira.jpg" alt="">
            </div>

            <div class="space-y-2">
              <div class="space-y-1">
              <h3 class = "font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">John Paul Oira</h3>
                <p class="font-concoursec3 text-lg font-normal tracking-normal leading-none text-lambright-500 uppercase">People</p>
              </div>
              <ul role="list" class="flex space-x-5">
              
                <li>
                  <a target = "_blank" href="https://www.linkedin.com/in/john-paul-noel-oira-102049105" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="images/Samantha.jpg" alt="">
            </div>

            <div class="space-y-2">
              <div class="text-lg leading-6 font-medium space-y-1">
              <h3 class = "font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">Samantha Taganile</h3>
                <p class="font-concoursec3 text-lg font-normal tracking-normal leading-none text-lambright-500 uppercase">Process</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a target = "_blank" href="http://www.linkedin.com/in/samantha-christi-taganile-6b9a21118" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="images/Bernard.jpg" alt="">
            </div>

            <div class="space-y-2">
              <div class="text-lg leading-6 font-medium space-y-1">
              <h3 class = "font-concourset4 text-2xl font-normal tracking-normal leading-tight capitalize text-newcolor-50">Bernard Dadea</h3>
                <p class="font-concoursec3 text-lg font-normal tracking-normal leading-none text-lambright-500 uppercase">Technology</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a target = "_blank" href="https://twitter.com/bernarddadea" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a target = "_blank" href="https://www.linkedin.com/in/bernarddadea/" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </li>

        <!-- More people... -->
      </ul>
    </div>
  </div>
</div>



@endsection