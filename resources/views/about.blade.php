@extends('layouts.app')

@section('content')

@include('header')

<!-- Header Branded with Background -->

<div class="relative top-16 bg-lambright-500">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="images/LAMB-Site-Image-HeaderAbout_Grey.jpg" alt="">
    <div class="absolute inset-0 bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">About Lambent</h1>
    <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Lambent is an offshore outsourcer devoted to better processes for high-growth businesses, cost-conscious organizations, and driven entrepreneurs. </p>
  </div>
</div>

<!--Content Section Two Columns with Image -->

<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/typography'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white overflow-hidden mt-16">
  <div class="relative max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
    <div class="hidden lg:block bg-gray-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
    <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
      <div>
        <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Case Study</h2>
        <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Better Outsourcing </h3>
      </div>
    </div>
    <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
      <div class="relative lg:row-start-1 lg:col-start-2">
        <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
          <defs>
            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
        </svg>
        <div class="relative text-base mx-auto max-w-prose lg:max-w-none">
          <figure>
            <div class="relative aspect-w-12 aspect-h-14  overflow-hidden mt-12 mb-14 rounded-lg">
                <img class="absolute inset-0 h-full w-full object-cover" src="images/LAMB-Site-Image-About.jpg" alt="">
                  <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
                  <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600  opacity-90"></div>
            </div>

            <div class="relative aspect-w-12 aspect-h-14  overflow-hidden rounded-lg">
                <img class="absolute inset-0 h-full w-full object-cover" src="images/LAMB-Site-Image-About2.jpg" alt="">
                  <div class="absolute inset-0 bg-lambright-600 mix-blend-multiply"></div>
                  <div class="absolute inset-0 bg-gradient-to-t from-lambright-600 via-lambright-600  opacity-90"></div>
            </div>
            <span class="font-concourset3 font-normal text-gray-500 text-lg">Lambent Actively Supports Remote Area Medical Philippines Missions</span>
          </figure>
        </div>
      </div>
      <div class="mt-8 lg:mt-0">
        <div class="text-base max-w-prose mx-auto lg:max-w-none">
          <p class="font-copy2 font-normal text-lg text-gray-500 mt-6">Maybe you want to grow your business more quickly. Maybe you want to spend less time at work or more time on the big-picture stuff. Maybe you want some process daemons to make your back-office hum. Maybe you want to save money. </p>
          <p class="font-copy2 font-normal text-lg text-gray-500 mt-6">You’re in luck. Since 2006, we’ve been perfecting managed back-office services for projects and programs from admin assistance for entrepreneurs to 24x7 customer support for high-growth technology companies.</p>
          <p class ="font-copy2 font-normal text-lg text-gray-500 mt-6">Our idea: create efficient, practical solutions for offshore work. 
Our mantra: build your value for your customers, your audience, your stakeholders.</p>
        </div>
      <div class="mt-5 prose prose-indigo text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1">
        <p class = "text-4xl font-concourset6 font-semibold text-black my-2">Our Mission</p>
          <div class="text-base max-w-prose mx-auto lg:max-w-none">
          <p class="font-copy2 font-normal text-lg text-gray-500 mt-6">Back-office work requires trust between provider and client. When we work for our clients, we represent them to the world. Our work becomes indistinguishable from their work. That’s why we invest in early process documentation and calibration to get the details right. This is the foundation for deep, long-term working relationships. </p>
          <p class="font-copy2 font-normal text-lg text-gray-500 mt-6">We’ve learned that the best way to service our clients is to make sure we attract, develop, and keep the best talent we can. Duty to our clients, our team, and our community inform everything we do.</p>
        <p class = "text-4xl font-concourset6 font-semibold text-black my-2">Our Value</p>
          <p class="font-copy2 font-normal text-lg text-gray-500 mt-6">We Create Value for Our Clients - Our clients are why we do what we do. When we perform work for our clients, we assume their perspective to drive tangible gains. Deep collaboration makes our programs extraordinarily successful</p>
          <p class="font-copy2 font-normal text-lg text-gray-500 mt-6">We Invest in Our Team’s Growth & Happiness - We believe in the virtuous cycle. Attract and train great people. Foster a comfortable, productive environment for those great people. Build happy and prosperous teams. Coach those teams to greatness.</p>
          <p class="font-copy2 font-normal text-lg text-gray-500 mt-6">We Care About Our Community & the Environment - Our business lives in Dumaguete and Birmingham. These places are home, and in a greater sense, the world is our home. Taking care of our home is an essential part of our philosophy of work and life</p>
      </div>
      </div>
    </div>
  </div>
</div>


<!-- Team Sections Grid with Rounded Image -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
  <div class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24">
    <div class="space-y-8 sm:space-y-12">
      <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
        <h2 class="text-5xl font-semibold font-concourset6">The People</h2>
        <p class="text-xl text-gray-500">Risus velit condimentum vitae tincidunt tincidunt. Mauris ridiculus fusce amet urna nunc. Ut nisl ornare diam in.</p>
      </div>
      <ul role="list" class="mx-auto grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:max-w-5xl lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6">
        <li>
          <div class="space-y-4">
            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="images/Harry.jpg" alt="">
            <div class="space-y-2">
              <div class="text-xs font-medium lg:text-sm">
                <h3>Harry Fozzard</h3>
                <p class="text-indigo-600">Founder</p>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="images/Jenny.jpg" alt="">
            <div class="space-y-2">
              <div class="text-xs font-medium lg:text-sm">
                <h3>Jenny Bertol-Tan</h3>
                <p class="text-indigo-600">Partner</p>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="images/Joy Dela Cruz.jpg" alt="">
            <div class="space-y-2">
              <div class="text-xs font-medium lg:text-sm">
                <h3>Joy Dela Cruz</h3>
                <p class="text-indigo-600">Operations</p>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="images/John Paul Oira.jpg" alt="">
            <div class="space-y-2">
              <div class="text-xs font-medium lg:text-sm">
                <h3>John Paul Oira</h3>
                <p class="text-indigo-600">People</p>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="images/Samantha.jpg" alt="">
            <div class="space-y-2">
              <div class="text-xs font-medium lg:text-sm">
                <h3>Samantha Taganile</h3>
                <p class="text-indigo-600">Process</p>
              </div>
            </div>
          </div>
        </li>

        <li>
          <div class="space-y-4">
            <img class="mx-auto h-20 w-20 rounded-full lg:w-24 lg:h-24" src="images/Bernard.jpg" alt="">
            <div class="space-y-2">
              <div class="text-xs font-medium lg:text-sm">
                <h3>Bernard Dadea</h3>
                <p class="text-indigo-600">Technology</p>
              </div>
            </div>
          </div>
        </li>

        <!-- More people... -->
      </ul>
    </div>
  </div>
</div>
@endsection