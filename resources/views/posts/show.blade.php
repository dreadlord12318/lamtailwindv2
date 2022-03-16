@extends('layouts.blog')

@section('title', 'Lambent: We create stories here')

@section('description', '')

@section('content')

@include('header')

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



<div class="bg-white  pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
    <div class="relative mt-5 max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
        <div>

            <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Lambent Blog</h2>
            </div>
        </div>

        @if (session('status'))
        <div role="alert">
            <div class="bg-lambright-600 mt-2 text-white font-bold top-10 rounded-t px-4 py-3">
                Success
            </div>
            <div class="border border-t-0 border-lambright-600 rounded-b bg-white px-4 py-3 text-newcolor-200">
                <p> {{ session('status') }}</p>
            </div>
        </div>
        @endif

        <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
            <div class="col-span-2">
                <a href="#" class="mt-2 block ">
                    <p class="text-xl font-semibold text-gray-900">{{ $post->title }}</p>
                    <div class="mt-3 prose">{!! $post->description !!}</div>
                </a>
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-x-1">
                    <div class="rounded-lg bg-gray-200">
                        <div class="block mt-4">
                            <p class="text-base text-center mb-0 text-gray-500">Url Slug:</p>
                            <p class="text-md text-center mb-0 text-gray-500">
                                <a
                                    href="{{route('blogs.blogsimple', $post->slug)}}">{{route('blogs.blogsimple', $post->slug)}}</a>
                            </p>
                        </div>
                        <div class="block mt-4">
                            <p class="text-base mb-0 text-center text-gray-500">Category</p>
                            <p class="text-md mb-0 text-center text-gray-500">
                                {{$post->category->name}}
                            </p>
                        </div>
                        <div class="block mt-4">
                            <p class="text-base mb-0 text-center text-gray-500">Created at
                                {{date('F j, Y, g:i a',strtotime($post->created_at))}}</p>
                            <p class="mt-2 text-base mb-0 text-center text-gray-500">Last Updated
                                {{date('F j, Y, g:i a',strtotime($post->updated_at))}}</p>
                        </div>
                        <div class="text-center flex justify-center">
                            <a href="{{ action('App\Http\Controllers\PostController@edit', [$post->id]) }}"
                                type="button"
                                class="text-white   mt-2 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
                            <form action="{{ action('App\Http\Controllers\PostController@destroy', [$post->id]) }}"
                                method="POST" class="flex">
                                {{ csrf_field()}}
                                {{ method_field("DELETE") }}
                                <button type="submit" type="button"
                                    class="text-white  mt-2 bg-red-800 hover:bg-red-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-700 dark:hover:bg-red-800 dark:focus:ring-red-700">Delete</button>
                            </form>
                        </div>
                        <div class="py-4 px-10 ">
                            <a href="/posts"
                                class="bg-blue-700 flex items-center justify-center py-3 text-white px-3 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">See All Posts</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
</div>


@endsection