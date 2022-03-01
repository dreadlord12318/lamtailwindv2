@extends('layouts.app')

@section('content')

@include('header')


<!-- Header Branded with Background -->


<div class="bg-gray-100 ">
  <div class="max-w-7xl mx-auto py-16 px-4  sm:py-24 sm:px-6 lg:px-8">
    <div class="relative top-8 bg-white shadow-xl">
      <h2 class="sr-only">Contact us</h2>

      <div class="grid grid-cols-1 lg:grid-cols-3">
        <!-- Contact information -->
        <div class="relative overflow-hidden py-10 px-6 bg-blue-600 sm:px-10 xl:p-12">
          <div class="absolute inset-0 pointer-events-none sm:hidden" aria-hidden="true">
            <svg class="absolute inset-0 w-full h-full" width="343" height="388" viewBox="0 0 343 388" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
              <path d="M-99 461.107L608.107-246l707.103 707.107-707.103 707.103L-99 461.107z" fill="url(#linear1)" fill-opacity=".1" />
              <defs>
                <linearGradient id="linear1" x1="254.553" y1="107.554" x2="961.66" y2="814.66" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff"></stop>
                  <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
          <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none sm:block lg:hidden" aria-hidden="true">
            <!-- <svg class="absolute bg-lambright-300 inset-0 w-full h-full" width="359" height="339" viewBox="0 0 359 339" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
              <path d="M-161 382.107L546.107-325l707.103 707.107-707.103 707.103L-161 382.107z" fill="url(#linear2)" fill-opacity=".1" />
              <defs>
                <linearGradient id="linear2" x1="192.553" y1="28.553" x2="899.66" y2="735.66" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff"></stop>
                  <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                </linearGradient>
              </defs>
            </svg> -->
          </div>
          <div class="hidden absolute top-0 right-0 bottom-0 w-1/2 pointer-events-none lg:block" aria-hidden="true">
            <!-- <svg class="absolute inset-0 w-full h-full" width="160" height="678" viewBox="0 0 160 678" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
              <path d="M-161 679.107L546.107-28l707.103 707.107-707.103 707.103L-161 679.107z" fill="url(#linear3)" fill-opacity=".1" />
              <defs>
                <linearGradient id="linear3" x1="192.553" y1="325.553" x2="899.66" y2="1032.66" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#fff"></stop>
                  <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                </linearGradient>
              </defs>
            </svg> -->
          </div>
          <p class="mt-2 text-white font-concourset6 text-5xl font-normal tracking-normal leading-tight text-left capitalize">
        Free Magic  
</p>
      
      <p class="mt-3 text-xl font-normal tracking-normal text-left font-copy normal-case text-white">
      Reach out for a free 4-hour demonstration of our services.<br> You’ll be amazed at how we turn ToDo lists into TaDone lists.
      </p>
      <dl class="mt-8 space-y-6">
            <dt><span class="sr-only">Phone number</span></dt>
            <dd class="flex text-base text-white"> 
              <!-- Heroicon name: outline/phone -->
              <svg class="flex-shrink-0 w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span class="ml-3">+1-877-709-8939</span>
            </dd>
      </dl>
          <!-- <dl class="mt-8 space-y-6">
            <dt><span class="sr-only">Phone number</span></dt>
            <dd class="flex text-base text-indigo-50"> -->
              <!-- Heroicon name: outline/phone -->
              <!-- <svg class="flex-shrink-0 w-6 h-6 text-indigo-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span class="ml-3">+1 (555) 123-4567</span>
            </dd>
            <dt><span class="sr-only">Email</span></dt>
            <dd class="flex text-base text-indigo-50"> -->
              <!-- Heroicon name: outline/mail -->
              <!-- <svg class="flex-shrink-0 w-6 h-6 text-indigo-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span class="ml-3">support@workcation.com</span>
            </dd>
          </dl> -->
          <ul role="list" class="mt-8 flex space-x-12">
            <li>
              <a class="text-indigo-200 hover:text-indigo-100" href="https://www.facebook.com/lambent.co">
                <span class="sr-only">Facebook</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                  <path d="M22.258 1H2.242C1.556 1 1 1.556 1 2.242v20.016c0 .686.556 1.242 1.242 1.242h10.776v-8.713h-2.932V11.39h2.932V8.887c0-2.906 1.775-4.489 4.367-4.489 1.242 0 2.31.093 2.62.134v3.037l-1.797.001c-1.41 0-1.683.67-1.683 1.653v2.168h3.362l-.438 3.396h-2.924V23.5h5.733c.686 0 1.242-.556 1.242-1.242V2.242C23.5 1.556 22.944 1 22.258 1" fill="currentColor" />
                </svg>
              </a>
            </li>
            <li>
              <a class="text-indigo-200 hover:text-indigo-100" href="https://www.linkedin.com/">
                <span class="sr-only">LinkedIn</span>
                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                    </svg>
              </a>
            </li>
            <li>
              <a class="text-indigo-200 hover:text-indigo-100" href="https://twitter.com/lambentconsult">
                <span class="sr-only">Twitter</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" aria-hidden="true">
                  <path d="M7.548 22.501c9.056 0 14.01-7.503 14.01-14.01 0-.213 0-.425-.015-.636A10.02 10.02 0 0024 5.305a9.828 9.828 0 01-2.828.776 4.94 4.94 0 002.165-2.724 9.867 9.867 0 01-3.127 1.195 4.929 4.929 0 00-8.391 4.491A13.98 13.98 0 011.67 3.9a4.928 4.928 0 001.525 6.573A4.887 4.887 0 01.96 9.855v.063a4.926 4.926 0 003.95 4.827 4.917 4.917 0 01-2.223.084 4.93 4.93 0 004.6 3.42A9.88 9.88 0 010 20.289a13.941 13.941 0 007.548 2.209" fill="currentColor" />
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <!-- Contact form -->
        <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
        <!-- <p class="mt-2 text-gray-900 font-concourset6 text-5xl font-normal tracking-normal leading-tight text-left capitalize">
        
</p>
      
      <p class="mt-3 text-xl font-normal tracking-normal text-left font-copy normal-case text-gray-900">
      Schedule a call with us to learn how you can accomplish more with managed virtual assistance. Help is a conversation away. 
      </p> -->
    
      
          <form action="/cta" method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
          {{ csrf_field()}}
            <div>
             
              <div class="mt-1">
                <input type="text" name="fname" id="fname" placeholder = "First Name" autocomplete="given-name" class="py-3 px-4 block w-full shadow-sm font-concourset3 text-base font-normal text-newcolor-200 tracking-normal leading-relaxed normal-case focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" required>
              </div>
            </div>
            <div>
             
              <div class="mt-1">
                <input type="text" name="lname" id="lname" placeholder = "Last Name" autocomplete="family-name" class="py-3 px-4 block w-full shadow-sm font-concourset3 text-base font-normal text-newcolor-200 tracking-normal leading-relaxed normal-case focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" required>
              </div>
            </div>
            <div>
       
              <div class="mt-1">
                <input id="email" name="email" type="email" placeholder = "Email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm font-concourset3 text-base font-normal text-newcolor-200 tracking-normal leading-relaxed normal-case focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" required>
              </div>
            </div>
            <div>
              <div class="flex justify-between">
              
              </div>
              <div class="mt-1">
                <input type="text" name="phone" id="phone" placeholder = "Phone" autocomplete="tel" class="py-3 px-4 block w-full shadow-sm font-concourset3 text-base font-normal text-newcolor-200 tracking-normal leading-relaxed normal-case focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" aria-describedby="phone-optional">
              </div>
            </div>
            <div class="sm:col-span-2">
             
              <div class="mt-1">
                <input type="text"  name="subject" id="subject" placeholder = "Subject" value="I want Free Magic" class="py-3 px-4 block w-full shadow-sm font-concourset3 text-base font-normal text-newcolor-200 tracking-normal leading-relaxed normal-case focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" readonly>
              </div>
            </div>
            <div class="sm:col-span-2">
              <div class="flex justify-between">
          
              </div>
              <div class="mt-1">
                <textarea id="message" name="message" placeholder = "Message" rows="4" class="py-3 px-4 block w-full shadow-sm font-concourset3 text-base font-normal text-newcolor-200 tracking-normal leading-relaxed normal-case focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md" aria-describedby="message-max"></textarea>
              </div>
            </div>

            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
              @error('g-recaptcha-response')
          <div class="text-red-500">{{ $message }}</div>
             @enderror


            <div class="sm:col-span-2 sm:flex sm:justify-end">
              <button type="submit" class="mt-2 w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm font-concourset6 text-lg font-normal tracking-normal leading-none text-center text-slate-50 bg-lime-500 hover:bg-lime-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:w-auto">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Calendly inline widget begin -->
<!-- <div class="calendly-inline-widget" data-url="https://calendly.com/lambent_co/15min" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script> -->
<!-- Calendly inline widget end -->


@endsection