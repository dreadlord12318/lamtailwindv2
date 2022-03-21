@extends('layouts.blog')

@section('title', 'Lambent: The story we have')

@section('description', 'Lambent’s values:')

@section('content')


@include('header')



<div class="relative top-16 pb-20 pt-20 bg-blue-700">
  <div class="absolute inset-0">
    <img class="w-full h-full object-cover" src="{{ asset('images/' . $post->image) }}" alt="Lambent’s values inform our work.">
    <div class="absolute inset-0 h-full bg-blue-700 mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <h1 class="text-6xl text-left  font-concourset6  leading-tight font-normal tracking-normal text-newcolor-700 capitalize">{{$post->title}}</h1>
    <!-- <p class="mt-6 font-copy text-2xl font-normal tracking-normal leading-normal text-left text-newcolor-700 max-w-3xl">If you’re an entrepreneur, a creator, a leader: you have a dream, a goal. Whatever you’re building, we’re here, ready and waiting to stand shoulder-to-shoulder with you. You bring the inspiration to do something unique, relevant, new, special. We’ll bring the process chops and the team.</p> -->
  </div>
</div>



<div class="relative py-16 bg-white overflow-hidden">
  <div class="hidden lg:block lg:absolute lg:inset-y-0 mt-6 lg:h-full lg:w-full">
    <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
      <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
        <defs>
          <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
      </svg>
      <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
        <defs>
          <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
      </svg>
      <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
        <defs>
          <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
      </svg>
    </div>
  </div>
  <div class="relative px-4 sm:px-6 lg:px-8">
    <div class="text-lg max-w-prose mx-auto">
      <h1>
        <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">Lambent</span>
      </h1>
      <div class="mt-8 mx-auto prose">
      {!!$post->description!!}
      </div>
     
    </div>
    <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
<!--      
      <figure>
        <img class="w-full rounded-lg" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=facearea&w=1310&h=873&q=80&facepad=3" alt="" width="1310" height="873">
        <figcaption>Sagittis scelerisque nulla cursus in enim consectetur quam.</figcaption>
      </figure>
      -->
    </div>
  </div>
</div>
<div class = "flex justify-center bg-white">
        <a href = "/lambentblog" class = "mt-8 text-xl p-4 text-center rounded-md text-gray-500 leading-8">ALL POST</a>
      </div>
@include('footer')

@endsection