
@extends('layouts.app')

@section('content')

@include('header')

<!-- Header Branded with Background -->

<div class="relative top-16 bg-lambright-500">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="/images/LAMB-Site-Image-Header-Pricing.jpg" alt="">
    <div class="absolute inset-0 bg-lambright-500 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-6xl text-left  font-concourset6  leading-tight font-normal tracking-normal text-newcolor-700 capitalize">Flat-rate Pricing </h1>
    <p class="mt-6 font-copy text-2xl font-normal tracking-normal leading-normal text-left text-newcolor-700 max-w-3xl">Lambent's pricing structure keeps things simple and straightforward. You get total flexibility to fill your booked hours with any task you designate. Hand-off work with complete control and minimal hassle. Coordinate tasks on your weekly status call, receive weekly activity reports, assign and track your work in our dedicated project portal.</p>
  </div>
</div>

<!-- Pricing - with five tiers and feature -->

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white mt-8">
<test2></test2>
</div>

<!-- FAQ CENTERED ACCORDIAN -->

<div class="bg-lamblue-100">
<faq></faq>
</div>

@endsection