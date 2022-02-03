@extends('layouts.app')

@section('content')

@include('header')

<div class="relative top-16 bg-lambright-500">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="images/LAMB-Site-Image-HeaderContact_Grey.jpg" alt="">
    <div class="absolute inset-0 bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">We Thrive on Conversation</h1>
    <p class="mt-6 text-xl text-indigo-100 max-w-3xl">What are you doing and how can we help you? We geek out on speaking with you about what’s getting you up in the morning and how we can caffeinate your workflow. Everything begins with a conversation. Let’s do this!</p>
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
  <div class="relative max-w-xl mx-auto">
    <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404" aria-hidden="true">
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
    </svg>
    <div class="text-center">
      <h2 class="font-copy text-3xl font-normal tracking-normal leading-relaxed normal-case text-black">
        Contact sales
      </h2>
      <p class="mt-4 font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-800">
        Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor lacus arcu.
      </p>
    </div>
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
      <form action="/contact2" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
      
        {{ csrf_field()}}
        <div>
          <label for="first-name" class="block font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-800">First name</label>
          <div class="mt-1">
          <input type="text" placeholder="First Name" name="first_name" id="first_name" value = "{{old('first_name')}}" autocomplete="given-name" class="block w-full py-3.5 px-4 font-concourset3 text-base font-normal-400 tracking-normal leading-relaxed normal-case shadow-sm s focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
          @if($errors->has('first_name'))
          <div class="flex items-center bg-blue-500 text-white text-sm font-bold my-2 rounded-md px-4 py-3" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>{{ $errors->first('first_name') }}</p>
</div>
          @endif
          </div>
        </div>
        <div>
          <label for="last-name" class="block font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-800">Last name</label>
          <div class="mt-1">
          <input type="text" placeholder="Last Name" name="last_name" id="last_name" value = "{{old('last_name')}}" autocomplete="family-name" class="block w-full font-concourset3 text-base font-normal-400 tracking-normal leading-relaxed normal-case  py-3.5 px-4 shadow-sm  focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
          @if($errors->has('last_name'))
          <div class="flex items-center bg-blue-500 text-white text-sm my-2 rounded-md font-bold px-4 py-3" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>{{ $errors->first('last_name') }}</p>
</div>
          @endif
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="company" class="block font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-800">Company</label>
          <div class="mt-1">
          <input type="text" placeholder="Company" name="company" id="company" autocomplete="company" value = "{{old('company')}}" class="block w-full font-concourset3 text-base font-normal-400 tracking-normal leading-relaxed normal-case  py-3.5 px-4 shadow-sm  focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="email" class="block font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-800">Email</label>
          <div class="mt-1">
          <input id="email" placeholder="Email" name="email" type="email" autocomplete="email" value = "{{old('email')}}"  class="block w-full font-concourset3 text-base font-normal-400 tracking-normal leading-relaxed normal-case  py-3.5 px-4 shadow-sm  focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
          @if($errors->has('email'))
          <div class="flex items-center bg-blue-500 text-white text-sm font-bold my-2  px-4 py-3 rounded-md" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>{{ $errors->first('email') }}</p>
</div>
          @endif
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="message" class="block font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-800">Message</label>
          <div class="mt-1">
            <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md">{{old('message')}}</textarea>
          </div>
        </div>
        @if($errors->has('terms'))
          <div class="flex items-center bg-blue-500 text-white text-sm font-bold my-2 rounded-md px-4 py-3" role="alert">
  <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
  <p>{{ $errors->first('terms') }}</p>
</div>
          @endif
        <div class="sm:col-span-2">
          <div class="flex items-start">
            <div class="flex-shrink-0">
              <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
              <label for="toggleB" class="flex items-center cursor-pointer">
    <!-- toggle -->
    <div class="relative">
      <!-- input -->
      <input type="checkbox" id="toggleB" name="terms" class="sr-only">
      <!-- line -->
      <div class="block bg-gray-200 w-11 h-6 border-2 border-transparent rounded-full cursor-pointer"></div>
      <!-- dot -->
      <div class="dot absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full transition"></div>
    </div>
  </label>
            </div>
            <div class="ml-3">
              <p class="text-base text-gray-500">
                By selecting this, you agree to the
                <a target= "_blank" href="/privacy" class="font-medium text-gray-700 underline">Privacy Policy</a>
                and
                <a target= "_blank" href="/GDPR" class="font-medium text-gray-700 underline">Cookie Policy</a>.
              </p>
            </div>
          </div>
        </div>
        <div class="sm:col-span-2">
          <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-lambright-600 hover:bg-lambright-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Let's talk
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection