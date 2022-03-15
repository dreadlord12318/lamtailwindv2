@extends('layouts.app')

@section('title', 'Supercharge Your Productivity with a Managed Virtual Team')

@section('description', 'Reasonably priced, astoundingly productive remote workers and teams from the Philippines. Learn more with a brief, on-point, mishigas-free consultation today!')

@section('content')

@include('header')

<!-- <div class="relative top-16 bg-lambright-500">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="images/LAMB-Site-Image-HeaderContact_Grey.jpg" alt="">
    <div class="absolute inset-0 bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">We Thrive on Conversation</h1>
    <p class="mt-6 text-xl text-indigo-100 max-w-3xl">What are you doing and how can we help you? We geek out on speaking with you about what’s getting you up in the morning and how we can caffeinate your workflow. Everything begins with a conversation. Let’s do this!</p>
  </div>
</div> -->


<div class="relative top-16 bg-blue-700">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="images/LAMB-Site-Image-Header-Contact.jpg" alt="">
    <div class="absolute inset-0 bg-blue-700 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-6xl text-left  font-concourset6  leading-tight font-normal tracking-normal text-newcolor-700 capitalize">We Thrive on Conversation</h1>
    <p class="mt-6 font-copy text-2xl font-normal tracking-normal leading-normal text-left text-newcolor-700 max-w-3xl">How can we help you? We geek out on speaking with people about how we can caffeinate their workflow. Everything begins with a conversation. </p>
  </div>
</div>



<!-- Contact Centered -->

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
<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
  <div class="relative max-w-4xl mx-auto">
    <!-- <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
      <defs>
        <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
    </svg>
    <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
      <defs>
        <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
    </svg> -->

    <div class="text-center">
      <h2 class="font-concourset6 text-5xl font-normal tracking-normal leading-tight normal-case text-newcolor-50">
      Let’s Do This!
      </h2>
      <p class="mt-4 font-copy text-xl font-normal tracking-normal leading-relaxed text-lambright-50">
      We’re keen to learn more about what you’re working on. Reach out to learn more about how we can supercharge your workflow with Reasonably priced, astoundingly productive remote workers and teams from the Philippines.
      </p>
    </div>
    </div>
    <div class="relative max-w-xl mx-auto">
    @if (session('status'))
    <div role="alert">
  <div class="bg-lambright-600 mt-2 text-white font-bold top-10 rounded-t px-4 py-3">
    Success
  </div>
  <div class="border border-t-0 border-lambright-600 rounded-b bg-white px-4 py-3 text-newcolor-200">
    <p>  {{ session('status') }}</p>
  </div>
</div>
@endif

    <div class="mt-12">
    <iframe class="clickup-embed clickup-dynamic-height" src="" onwheel="" width="100%" height="100%" style="background: transparent; border: 1px solid #ccc;"></iframe>
    </div>
    
</div>

</div>

@include('footer')

@endsection