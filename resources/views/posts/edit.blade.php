@extends('layouts.blog')

@section('title', 'Lambent: We create stories here')

@section('description', '')

@section('content')

@include('header')


<div class="grid grid-cols-3 gap-2  overflow-x-hidden">
    <div class="col-span-1 w-20">

        @include('posts.sidebar')



    </div>

    <div class="col-span-2 -ml-40 mr-20">



        <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
                <div>
                    <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">Lambent Blog</h2>
                    <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
                        <p class="text-xl text-gray-500">Get weekly articles in your inbox</p>
                        <form class="mt-6 flex flex-col sm:flex-row lg:mt-0 lg:justify-end">
                            <div>


                        </form>
                    </div>
                </div>
                <form action="{{ action('App\Http\Controllers\PostController@update', [$post->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field("PUT") }}
                    <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                        <div class="col-span-2">
                            <a href="#" class="mt-2 block">
                                <label class="text-gray-600 font-normal">Title</label>
                                <input type='text' name="title" value="{{ old('title', $post->title) }}"
                                    class="w-full mt-2 mb-2 px-6 py-2 border rounded-lg text-lg text-gray-700 focus:outline-none" />
                                <label for="base-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Slug</label>
                                <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" id="base-input"
                                    class="bg-gray-50 mb-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('slug'))
                                <div class="flex items-center bg-red-500 text-white text-sm font-bold my-2 rounded-md px-4 py-3"
                                    role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                        </svg>
                                    <p>{{ $errors->first('slug') }}</p>
                                </div>
                                @endif

                                <label for="base-input" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Feature Image</label>
                                <input type="file" name="featured_image" id="fileToUpload">

                                <label for="category_id"
                                    class="block mb-2 text-sm mt-2 font-medium text-gray-900 dark:text-gray-400">Category</label>
                                <select id="category" name ="category_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($categories as $category)
                                    <option value = "{{ $category->id }}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }} >{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('category_id'))
                                <div class="flex items-center bg-blue-500 text-white text-sm font-bold my-2 rounded-md px-4 py-3"
                                    role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                    </svg>
                                    <p>{{ $errors->first('category_id') }}</p>
                                </div>
                                @endif

                                <label class="text-gray-600 font-normal">Body</label>
                                <textarea
                                    class="w-full px-3 py-2 mt-2  text-gray-700 border rounded-lg focus:outline-none"
                                    name="description" value="{{ old('description', $post->description) }}"
                                    rows="4"></textarea>

                            </a>
                        </div>
                        <div class="col-span-1">
                            <div class="grid h-full pt-8 grid-cols-1">
                                
                                <div class="rounded-lg bg-gray-200 px-10 py-4">
                                <div class="text-center">
                                    <img class="h-48 w-full object-cover" src="{{ asset('images/' . $post->image) }}" alt="">
                                    </div>
                                    <a href="#" class="mt-2 pt-8 block">
                                        <p class="text-base text-center text-gray-5 00">Created at
                                            {{date('F j, Y, g:i a',strtotime($post->created_at))}}</p>
                                        <p class="mt-3 text-base text-center text-gray-500">Last Updated
                                            {{$post->updated_at}}</p>
                                    </a>
                                    <div class="text-center">
                                        <button type="submit" type="button"
                                            class="text-white  mt-2 bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update</button>
                                        <a href="{{ action('App\Http\Controllers\PostController@show', [$post]) }}"
                                            type="button"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancel</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>

    </div>
</div>
</div>
</div>
</div>

@endsection