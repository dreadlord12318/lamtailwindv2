@extends('layouts.app')

@section('content')


<!-- Header Branded with Background -->
<div class = "container relative top-14">
<test></test>

<div id = "modals"></div>

<div class="flex items-center justify-center w-full mb-12">
  
  <label for="toggleB" class="flex items-center cursor-pointer">
    <!-- toggle -->
    <div class="relative">
      <!-- input -->
      <input type="checkbox" id="toggleB" class="sr-only">
      <!-- line -->
      <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
      <!-- dot -->
      <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
    </div>
    <!-- label -->
    <div class="ml-3 text-gray-700 font-medium">
      Toggle Me!
    </div>
  </label>

</div>

</div>
</div>
@endsection