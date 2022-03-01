<?php

// header('refresh: 10; url=/');

?>

@extends('layouts.app')

@section('content')

@include('header')








<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
  <main class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-xl mx-auto py-16 sm:py-24">
      <div class="text-center mt-16">
        <p class="text-sm font-semibold text-indigo-600 uppercase tracking-wide">Lambent</p>
        <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Confirmation Page</h1>
      </div>
      <div class="mt-12">
        <ul role="list" class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">
          <li class="relative py-6 flex items-start space-x-4">
            
            <div class="min-w-0 flex-1">
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
          </li>

          <li class="relative py-6 flex items-start space-x-4">
            <div class="flex-shrink-0">
              <span class="flex items-center justify-center h-12 w-12 rounded-lg bg-indigo-50">
                <!-- Heroicon name: outline/view-list -->
               
              <svg class="h-6 w-6 text-indigo-700" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.1679 8C19.6247 4.46819 16.1006 2 11.9999 2C6.81459 2 2.55104 5.94668 2.04932 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 8H21.4C21.7314 8 22 7.73137 22 7.4V3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.88146 16C4.42458 19.5318 7.94874 22 12.0494 22C17.2347 22 21.4983 18.0533 22 13" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M7.04932 16H2.64932C2.31795 16 2.04932 16.2686 2.04932 16.6V21" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
              </span>
            </div>
            <div class="min-w-0 flex-1">
              <h3 class="text-base font-medium text-gray-900">
                <span class="rounded-sm focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <p>You will be redirected back to homepage in <span id="counter">10</span> second(s).</p>
                        <script type="text/javascript">
                        function countdown() {
                            var i = document.getElementById('counter');
                            if (parseInt(i.innerHTML)<=0) {
                                location.href = '/';
                            }
                        if (parseInt(i.innerHTML)!=0) {
                            i.innerHTML = parseInt(i.innerHTML)-1;
                        }
                        }
                        setInterval(function(){ countdown(); },1000);
                        </script>
                </span>
              </h3>
              <p class="text-base text-gray-500">Thank you for your time</p>
            </div>
            <div class="flex-shrink-0 self-center">
              <!-- Heroicon name: solid/chevron-right -->
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
          </li>

          
        </ul>
      </div>
    </div>
  </main>

</div>
@include('footer')

@endsection