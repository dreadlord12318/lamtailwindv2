<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZD70L81JWE"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-ZD70L81JWE');
        </script>

<!-- Bing Analytics -->
<meta name="msvalidate.01" content="1425AB284A081A5DC2F2027B0CACCA5A" />

<!-- Plausible -->
<script defer data-domain="lambent.co" src="https://plausible.io/js/plausible.js"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <!-- <meta name="keywords" content="@yield('keywords')"> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" defer>
    <link rel="icon" type="image/png" sizes="32x32" href="images/LAMB-LambentLogoDark_Favicon.png">

    <!-- Google recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- Tiny MCE -->

    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
 <script>
   tinymce.init({
     selector: 'textarea', // Replace this CSS selector to match the placeholder element for TinyMCE
     plugins: 'code table lists link image',
     toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link | image ',
     image_caption: true
   });
 </script>
    

    <style>
        figure.image {
  display: inline-block;
  border: 1px solid gray;
  margin: 0 2px 0 1px;
  background: #f5f2f0;
}

figure.align-left {
  float: left;
}

figure.align-right {
  float: right;
}

figure.image img {
  margin: 8px 8px 0 8px;
}

figure.image figcaption {
  margin: 6px 8px 6px 8px;
  text-align: center;
}
.prose-lg img {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}
input:checked ~ .dot {
  transform: translateX(100%);
  background-color: #FFFF;
}

li {
    margin-bottom: 1em ;
}

ul {
    list-style-type: disc ;
  
    
}

</style>
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

</body>
</html>
