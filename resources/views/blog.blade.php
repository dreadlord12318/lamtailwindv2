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
    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
    @foreach ($posts as $post)
      <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="{{ asset('images/' . $post->image) }}" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <span href="" class="hover:underline">    {{$post->category->name}}  </span>
            </p>
            <a href="#" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">{{$post->title}}</p>
              <p class="mt-3 text-base text-gray-500">{{substr(strip_tags($post->description), 0, 60)}}</p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <!-- <a href="#">
                <span class="sr-only">Roel Aufderehar</span>
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </a> -->
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