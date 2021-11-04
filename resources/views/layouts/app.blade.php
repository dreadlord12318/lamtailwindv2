<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <!-- <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header> -->

        

        @yield('content')
    </div>

    <!-- Footer: Simple Centered -->

<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-lambright-600">
  <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
    <nav class="-mx-5 -my-2 flex flex-wrap justify-start" aria-label="Footer">
      <div class="px-5 py-2">
        <a href="/about" class="text-base text-white hover:text-white">
       ABOUT
        </a>
      </div>
      <div class="px-5 py-2">
        <a href="/pricing" class="text-base text-white hover:text-white">
      PRICING
        </a>
      </div>
      <div class="px-5 py-2">
        <a href="/illuminations" class="text-base text-white hover:text-white">
       ILLUMINATIONS
        </a>
      </div>
      <div class="px-5 py-2">
        <a href="/contact" class="text-base text-white hover:text-white">
       CONTACT
        </a>
      </div>

      <div class="px-5 py-2">
        <a href="/termsandcondition" class="text-base text-white hover:text-white">
          TERMS OF SERVICE
        </a>
      </div>

      <div class="px-5 py-2">
        <a href="/privacy" class="text-base text-white hover:text-white">
       DATA POLICY
        </a>
      </div>

      <div class="px-5 py-2">
        <a href="/GDPR" class="text-base text-white hover:text-white">
         GPDR POLICY
        </a>
      </div>

    </nav>
    <div class="mt-8 flex justify-start space-x-6">
      <a href="#" class="text-white hover:text-white">
        <span class="sr-only">Facebook</span>
       <img src = "images/LAMB-Site-Image-Footer_Facebook.svg"/>
      </a>

      <a href="#" class="text-white hover:text-white">
        <span class="sr-only">Instagram</span>
        <img src = "images/LAMB-Site-Image-Footer_Instagram.svg"/>
      </a>

      <a href="#" class="text-white hover:text-white">
        <span class="sr-only">Linkedin</span>
        <img src = "images/LAMB-Site-Image-Footer_LinkedIn.svg"/>
      </a>

      <a href="#" class="text-white hover:text-white">
        <span class="sr-only">Twitter</span>
        <img src = "images/LAMB-Site-Image-Footer_Twitter.svg"/>
      </a>


  
    </div>
    <p class="mt-8 text-start text-base text-white">
      &copy; 2021 Lambent Consulting, LLC. All rights reserved.
    </p>
  </div>
</footer>
</body>
</html>
