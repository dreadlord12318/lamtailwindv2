@extends('layouts.app')

@section('title', "Lambent's Blog - All about our work and the outsourcing world of the Philippines.")

@section('description', 'Regular updates on outsourcing life, work we do, the Philippines outsourcing scene and culture, and our project to map BPOs in the Philippines. ')

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

<div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
  <div class="absolute inset-0">
    <div class="bg-white h-1/3 sm:h-2/3"></div>
  </div>
  <div class="relative max-w-7xl mx-auto">
    <div class="text-center">
      <!-- <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">From the blog</h2>
      <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.</p> -->
    </div>

    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
    @foreach ($posts as $post)
      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-44 w-full object-cover" src="{{ asset('images/' . $post->image) }}" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="{{route('blogs.blogsimple', $post->slug)}}" class="hover:underline">     {{$post->category->name ?? 'None'}}  </a>
            </p>
            <a href="{{route('blogs.blogsimple', $post->slug)}}" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">{{$post->title}}</p>
              <p class="mt-3 text-base text-gray-500">{{substr(strip_tags($post->caption), 0, 125)}}....</p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
            </div>
            <div class="ml-3">
              <div class="flex space-x-1 text-sm text-gray-500">
              <time> {{date('F j, Y, g:i a',strtotime($post->created_at))}} </time>
                <span aria-hidden="true"> &middot; </span>
              </div>
            </div>
          </div>
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