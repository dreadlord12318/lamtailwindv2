@extends('layouts.app')

@section('title', 'Lambent: Categories')

@section('description', '')

@section('content')

@include('header')



<div class="grid grid-cols-3 gap-2  overflow-x-hidden">
    <div class="col-span-1 w-20">

        @include('posts.sidebar')



    </div>

    <div class="col-span-2 -ml-40 mr-20">


        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="flex flex-col mt-24">
                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                ID
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Category
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Edit
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @foreach ($categories as $category)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{$category->id}}</td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                {{$category->name}}</td>

                                            <td class="py-4 px-6 text-sm font-medium text-left whitespace-nowrap">
                                                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-1 gap-x-1 mt-32">
                    <div class="rounded-lg bg-gray-200">

                        <form action="{{ action('App\Http\Controllers\CategoryController@store') }}" method="POST"
                            class="p-7">
                            {{ csrf_field() }}
                            <div class="mb-6">
                                <label for="small-input"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">New
                                    Category</label>
                                <input type="text" id="small-input" name="name"
                                    class="block mb-4 p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
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
                    </div>

                </div>
            </div>
        </div>
    </div>
