
@extends('layouts.app')

@section('content')

@include('header')

<!-- Header Branded with Background -->

<div class="relative top-16 bg-lambright-500">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="/images/LAMB-Site-Image-HeaderPricing_Grey.jpg" alt="">
    <div class="absolute inset-0 bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-6xl text-left  font-concourset7 leading-snug font-normal-400 tracking-normal text-white">Commercial Notes</h1>
    <p class="mt-6 font-copy text-xl font-normal-400 tracking-normal leading-relaxed text-left text-white max-w-3xl">Different jobs require different skills. Lambent’s pricing matches standard task assignments with an appropriate hourly rates. You can create remote teams for short-term 
      projects or shared personel when you don’t need a full-time resource or for permanent teams and full-time staff.</p>
  </div>
</div>

<!-- Pricing - with five tiers and feature -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white mt-8">
<test2></test2>
</div>

<!-- FAQ CENTERED ACCORDIAN -->

<div class="bg-gray-50">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
      <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">
        Frequently asked questions
      </h2>
      <dl class="mt-6 space-y-6 divide-y divide-gray-200">
        <div class="pt-6">
          <dt class="text-lg">
            <!-- Expand/collapse question button -->
            <button type="button" class="text-left w-full flex justify-between items-start text-gray-400" aria-controls="faq-0" aria-expanded="false">
              <span class="font-medium text-gray-900">
                What&#039;s the best thing about Switzerland?
              </span>
              <span class="ml-6 h-7 flex items-center">
                <!--
                  Expand/collapse icon, toggle classes based on question open state.

                  Heroicon name: outline/chevron-down

                  Open: "-rotate-180", Closed: "rotate-0"
                -->
                <svg class="rotate-0 h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
            </button>
          </dt>
          <dd class="mt-2 pr-12" id="faq-0">
            <p class="text-base text-gray-500">
              I don&#039;t know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
            </p>
          </dd>
        </div>

        <!-- More questions... -->
      </dl>
    </div>
  </div>
</div>

@endsection