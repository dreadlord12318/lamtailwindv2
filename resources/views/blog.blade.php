@extends('layouts.app')

@section('title', 'Lambent: The story we have')

@section('description', 'Lambent’s values:')

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
<div class="bg-white top-24 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
  <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
    <div>
      <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Press</h2>
      <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
        <p class="text-xl text-gray-500">Get weekly articles in your inbox on how to grow your business.</p>
        <form class="mt-6 flex flex-col sm:flex-row lg:mt-0 lg:justify-end">
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input id="email-address" name="email-address" type="email" autocomplete="email" required class="appearance-none w-full px-4 py-2 border border-gray-300 text-base rounded-md text-gray-900 bg-white placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 lg:max-w-xs" placeholder="Enter your email">
          </div>
          <div class="mt-2 flex-shrink-0 w-full flex rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto sm:inline-flex">
            <button type="button" class="w-full bg-indigo-600 px-4 py-2 border border-transparent rounded-md flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto sm:inline-flex">Notify me</button>
          </div>
        </form>
      </div>
    </div>
    <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
      <div>
        <p class="text-sm text-gray-500">
          <time datetime="2020-03-16">Mar 16, 2020</time>
        </p>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900">Boost your conversion rate</p>
          <p class="mt-3 text-base text-gray-500">Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
        </a>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>

      <div>
        <p class="text-sm text-gray-500">
          <time datetime="2020-03-10">Mar 10, 2020</time>
        </p>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900">How to use search engine optimization to drive sales</p>
          <p class="mt-3 text-base text-gray-500">Optio cum necessitatibus dolor voluptatum provident commodi et. Qui aperiam fugiat nemo cumque.</p>
        </a>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>

      <div>
        <p class="text-sm text-gray-500">
          <time datetime="2020-02-12">Feb 12, 2020</time>
        </p>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900">Improve your customer experience</p>
          <p class="mt-3 text-base text-gray-500">Cupiditate maiores ullam eveniet adipisci in doloribus nulla minus. Voluptas iusto libero adipisci rem et corporis.</p>
        </a>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>

      <div>
        <p class="text-sm text-gray-500">
          <time datetime="2020-01-29">Jan 29, 2020</time>
        </p>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900">Writing effective landing page copy</p>
          <p class="mt-3 text-base text-gray-500">Ipsum voluptates quia doloremque culpa qui eius. Id qui id officia molestias quaerat deleniti. Qui facere numquam autem libero quae cupiditate asperiores vitae cupiditate. Cumque id deleniti explicabo.</p>
        </a>
        <div class="mt-3">
          <a href="#" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>
    </div>
  </div>
</div>



@include('footer')

@endsection