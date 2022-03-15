@extends('layouts.blog')

@section('title', 'Lambent: We create stories here')

@section('description', '')

@section('content')

@include('header')



@guest
<div class="bg-white">
    <div class="max-w-7xl  mx-auto text-center py-32 px-4 sm:px-6 lg:py-64 lg:px-8">
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

@else

<div class="grid grid-cols-3 gap-2  overflow-x-hidden">
    <div class="col-span-1 w-20">

        @include('posts.sidebar')



    </div>

    <div class="col-span-2 -ml-40 mr-20">

        <div class="relative top-8 pt-24 pb-20 bg-white">
            <div class="absolute inset-0">
                <div class="absolute inset-y-0 left-0 w-1/2 my-16 bg-white"></div>
            </div>
            <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
                <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                    <div class="max-w-lg mx-auto">
                        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">Create Something
                        </h2>
                        <p class="mt-3 text-lg leading-6 text-left text-gray-500">"When you know this, then you have identified with the creative principle, 
                            which is the God power in the world, which means in you."
                        <p class = "text-lg leading-6 text-left text-gray-500 mt-2">
                        The Power of Myth, Joseph Campbell and Bill Moyers</p></p>
                        <dl class="mt-8 text-base text-gray-500">
                            <div class="mt-6">
                                <dt class="sr-only">Phone number</dt>
                                <dd class="flex">
                                    <!-- Heroicon name: outline/phone -->
                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <span class="ml-3"> +1 (555) 123-4567 </span>
                                </dd>
                            </div>
                            <div class="mt-3">
                                <dt class="sr-only">Email</dt>
                                <dd class="flex">
                                    <!-- Heroicon name: outline/mail -->
                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-3"> info@lambent.co</span>

                                </dd>
                                <dd class="flex mt-3">
                                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                                    </svg>
                                    <span class="ml-3">
                                        <a href="/posts">Dashboard</a>
                                    </span>
                            </div>
                        </dl>

                    </div>
                </div>
                <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                    <div class="max-w-lg mx-auto lg:max-w-none">
                        <form action="{{ action('App\Http\Controllers\PostController@store') }}" method="POST"
                            class="grid grid-cols-1 gap-y-4">
                            {{ csrf_field()}}
                            <div class="mb-6">
                                <label for="base-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                                <input type="text" name="title" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('title'))
                                <div class="flex items-center bg-blue-500 text-white text-sm font-bold my-2 rounded-md px-4 py-3"
                                    role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                    </svg>
                                    <p>{{ $errors->first('title') }}</p>
                                </div>
                                @endif

                                <label for="base-input"
                                    class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Slug</label>
                                <input type="text" name="slug" id="base-input"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @if($errors->has('slug'))
                                <div class="flex items-center bg-blue-500 text-white text-sm font-bold my-2 rounded-md px-4 py-3"
                                    role="alert">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                    </svg>
                                    <p>{{ $errors->first('slug') }}</p>
                                </div>
                                @endif

                                <label for="category_id"
                                    class="block mb-2 text-sm mt-2 font-medium text-gray-900 dark:text-gray-400">Category</label>
                                <select id="category" name ="category_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($categories as $category)
                                    <option value = "{{$category->id}}" >{{$category->name}}</option>
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
                            </div>


                            <label for="message"
                                class="block text-sm font-medium text-gray-900 dark:text-gray-400">Body</label>
                            <textarea id="message" name="body" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Write something..."></textarea>
                            @if($errors->has('body'))
                            <div class="flex items-center bg-blue-500 text-white text-sm font-bold my-2 rounded-md px-4 py-3"
                                role="alert">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                                </svg>
                                <p>{{ $errors->first('body') }}</p>
                            </div>
                            @endif

                            <!-- This example requires Tailwind CSS v2.0+ -->



                            <button type="submit"
                                class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create
                                Post</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
</div>




@include('footer')

@endsection
