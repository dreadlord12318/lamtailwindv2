@extends('layouts.app')

@section('title', 'Lambent: The story we have')

@section('description', 'Lambent’s values:')

@section('content')


@include('header')

@include('blogs/blogheader')
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
<div class="bg-white  pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
  <div class="relative max-w-lg mx-auto lg:max-w-7xl">
    <div>
  
      <div class="  lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
        
      </div>
    </div>
    <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
      @foreach ($posts as $post)
      <div>
        <p class="text-sm text-gray-500">
          <time >{{date('F j, Y, g:i a',strtotime($post->created_at))}}</time>
        </p>
        <a href="#" class="mt-2 block">
          <p class="text-xl font-semibold text-gray-900">{{$post->title}}</p>
          <p class="mt-3 text-base text-gray-500">{{substr(strip_tags($post->description), 0, 60)}}</p>
        </a>
        <div class="mt-3">
          <a href="{{ url('blog/'.$post->slug) }}" class="text-base font-semibold text-indigo-600 hover:text-indigo-500"> Read full story </a>
        </div>
      </div>

      @endforeach
    </div>
    <div class="mt-20 grid gap-2 justify-items-center">
    {{ $posts->links() 
                
              }}
              </div>
  </div>
</div>



@include('footer')

@endsection