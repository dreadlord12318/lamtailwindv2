@extends('layouts.blog')

@section('title', 'Lambent: We create stories here')

@section('description', 'We oversee posts here')

@section('content')

@include('header')

<div class="grid grid-cols-3 gap-2  overflow-x-hidden">
    <div class="col-span-1 w-20">

        @include('posts.sidebar')



    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="col-span-2 -ml-40 mr-20">
        <div class="flex flex-col">
            <div class="-my-2 mt-16 overflow-x-auto sm:-mx-6 lg:-mx-8">
                @guest
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white">
                    <div class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            <span class="block">Ready to dive in?</span>
                            <span class="block">Start your free trial today.</span>
                        </h2>
                        <div class="mt-8 flex justify-center">
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('login') }}"
                                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                                    Login </a>
                            </div>
                            <div class="ml-3 inline-flex">
                                <a href="/lambentblog"
                                    class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
                                    All Posts </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a> -->

                @else
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                 

                    </div>

                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        @if (session('status'))
                        <div role="alert">
                            <div class="bg-lambright-600 mt-2 text-white font-bold top-10 rounded-t px-4 py-3">
                                Success
                            </div>
                            <div
                                class="border border-t-0 border-lambright-600 rounded-b bg-white px-4 py-3 text-newcolor-200">
                                <p> {{ session('status') }}</p>
                            </div>
                        </div>
                        @endif
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Body</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Category</th>
                                    <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th> -->
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                    alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{$post->title}}</div>
                                                <!-- <div class="text-sm text-gray-500">jane.cooper@example.com</div> -->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 w-1/2 whitespace-normal">
                                        <div class="text-sm text-gray-900">{{substr(strip_tags($post->description), 0, 60)}}</div>
                                        <!-- <div class="text-sm text-gray-500">Optimization</div> -->
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                   
                                {{$post->category->name ?? 'None'}}
                                 </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                                        <a href="{{action('App\Http\Controllers\PostController@show', [$post->id])}}"
                                            class="text-indigo-600 hover:text-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path
                                                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{action('App\Http\Controllers\PostController@edit', [$post->id])}}"
                                            class="text-indigo-600 hover:text-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>

                                <!-- More people... -->
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center my-2 ">
                            {{ $posts->links() 
                
                }}
                        </div>
                    </div>
                </div>
                @endguest
            </div>
        </div>

    </div>
</div>
@endsection
