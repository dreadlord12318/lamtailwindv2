@extends('layouts.app')

@section('content')


@include('header')



<!-- Header Branded with Background -->

<div class="relative top-16 pb-20 bg-lambright-500">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="images/LAMB-Site-Image-HeaderAbout_Grey.jpg" alt="">
    <div class="absolute inset-0 h-full bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">About Lambent</h1>
    <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Lambent is an offshore outsourcer devoted to better processes for high-growth businesses, cost-conscious organizations, and driven entrepreneurs. </p>
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
    <div class="text-lg prose prose-indigo prose-lg text-gray-500 mx-auto">
      <h1>
        <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">Case Study</span>
        <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Better Outsourcing</span>
      </h1>
    </div>
    <div class="mt-6 prose prose-indigo prose-lg font-copy2 font-copy2 font-normal text-lg text-gray-500 mt-6 mx-auto">
      <p>Maybe you want to grow your business more quickly. Maybe you want to spend less time at work or more time on the big-picture stuff. Maybe you want some process daemons to make your back-office hum. Maybe you want to save money.</p>
      <p>You’re in luck. Since 2006, we’ve been perfecting managed back-office services for projects and programs from admin assistance for entrepreneurs to 24x7 customer support for high-growth technology companies.</p>
      <p>Our idea: create efficient, practical solutions for offshore work. Our mantra: build your value for your customers, your audience, your stakeholders.</p>
      <h2>Our Mission</h2>
       <p>Back-office work requires trust between provider and client. When we work for our clients, we represent them to the world. Our work becomes indistinguishable from their work. That’s why we invest in early process documentation and calibration to get the details right. This is the foundation for deep, long-term working relationships. </p>
       <p>We’ve learned that the best way to service our clients is to make sure we attract, develop, and keep the best talent we can. Duty to our clients, our team, and our community inform everything we do.</p>
       <figure>
          <div class="relative aspect-w-12 aspect-h-10 overflow-hidden mt-12 mb-14 rounded-lg">
            <img class="absolute inset-0 my-0 lg:mt-0 h-full w-full object-cover" src="images/LAMB-Site-Image-About.jpg" alt="">
              <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
              <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600  opacity-90">
          </div>
          </div>
      </figure>
      <p class = "text-4xl font-concourset6 font-semibold text-black my-2">Our Value</p>
        <p>We Create Value for Our Clients - Our clients are why we do what we do. When we perform work for our clients, we assume their perspective to drive tangible gains. Deep collaboration makes our programs extraordinarily successful</p>
        <p>We Invest in Our Team’s Growth & Happiness - We believe in the virtuous cycle. Attract and train great people. Foster a comfortable, productive environment for those great people. Build happy and prosperous teams. Coach those teams to greatness.</p>
        <p>We Care About Our Community & the Environment - Our business lives in Dumaguete and Birmingham. These places are home, and in a greater sense, the world is our home. Taking care of our home is an essential part of our philosophy of work and life</p>
        <figure>
          <div class="relative aspect-w-12 aspect-h-10  overflow-hidden mt-12 mb-14 rounded-lg">
            <img class="absolute inset-0 my-0 lg:mt-0 h-full w-full object-cover" src="images/LAMB-Site-Image-About2.jpg" alt="">
              <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
              <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600  opacity-90">
          </div>
          </div>
      </figure>
      <figcaption>Lambent Actively Supports Remote Area Medical Philippines Missions</figcaption>
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
        <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Our Team</h2>
        <p class="text-xl text-gray-500">Odio nisi, lectus dis nulla. Ultrices maecenas vitae rutrum dolor ultricies donec risus sodales. Tempus quis et.</p>
      </div>
      <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
        <li>
          <div class="space-y-4">
            <div class="aspect-w-3 aspect-h-2">
              <img class="object-cover shadow-lg rounded-lg" src="images/Harry.jpg" alt="">
            </div>

            <div class="space-y-2">
              <div class="text-lg leading-6 font-medium space-y-1">
                <h3>Harry Fozzard</h3>
                <p class="text-indigo-600">Founder</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
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
              <div class="text-lg leading-6 font-medium space-y-1">
                <h3>Jenny Bertol-Tan</h3>
                <p class="text-indigo-600">Partner</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
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
              <div class="text-lg leading-6 font-medium space-y-1">
                <h3>Joy Dela Cruz</h3>
                <p class="text-indigo-600">Operations</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
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
              <div class="text-lg leading-6 font-medium space-y-1">
                <h3>John Paul Oira</h3>
                <p class="text-indigo-600">People</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
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
                <h3>Samantha Taganile</h3>
                <p class="text-indigo-600">Process</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
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
                <h3>Bernard Dadea</h3>
                <p class="text-indigo-600">Technology</p>
              </div>
              <ul role="list" class="flex space-x-5">
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-gray-400 hover:text-gray-500">
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