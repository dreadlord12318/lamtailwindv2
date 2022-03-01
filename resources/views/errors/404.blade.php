@extends('layouts.app')
@section('title', 'Lambent: You found nothing')


@section('content')

<!-- This example requires Tailwind CSS v2.0+ -->
<!--
  This example requires updating your template:

  ```
  <html class="h-full">
  <body class="h-full">
  ```
-->
<main class="min-h-full bg-cover bg-top sm:bg-top" style="background-image: url('images/404image.jpg')">
  <div class="max-w-7xl mx-auto px-4 py-96 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-96">
    <p class="text-sm font-semibold text-white uppercase tracking-wide">404 error</p>
    <h1 class="mt-2 text-4xl font-extrabold text-white tracking-tight sm:text-5xl">Uh oh! I think you’re lost.</h1>
    <p class="mt-2 text-lg font-medium text-white ">But feel free to enjoy your sunset</p>
    <div class="mt-6">
      <a href="/" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black text-opacity-75 bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50"> Go back home </a>
    </div>
  </div>
</main>


@endsection
