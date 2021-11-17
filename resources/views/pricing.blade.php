
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

<div class="bg-lamblue-100 pb-16">
<faq></faq>
</div>

@endsection