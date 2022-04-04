@extends('layouts.app')
@section('title', 'Lambent, supercharging workflows for small businesses everywhere.')
@section('description', '404 Error, all who wander are not lost. You just get a short minute to check out a fantastic, made-in-a-tropical-paradise sunset.')

@section('content')

<!-- This example requires Tailwind CSS v2.0+ -->
<!--
  This example requires updating your template:

  ```
  <html class="h-full">
  <body class="h-full">
  ```
-->
<main class="min-h-full bg-cover bg-top sm:bg-top" style="background-image: url('images/LAMB-Site-Image-Error.jpg')">
  <div class="max-w-7xl mx-auto px-4 py-96 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-96">
    <p class="text-sm font-semibold text-white uppercase tracking-wide">404 error</p>
    <h1 class="mt-2 text-4xl font-extrabold text-white tracking-tight sm:text-5xl">Uh oh! I think you’re lost.</h1>
    <p class="mt-2 text-lg font-medium text-white ">Let us know when you want to schedule your site visit. </p>
    <div class="mt-6">
      <a href="/" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black text-opacity-75 bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50"> Go back home </a>
    </div>
  </div>
</main>


@endsection
