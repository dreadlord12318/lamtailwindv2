@extends('layouts.app')

@section('content')

@include('header')


<!-- Header Branded with Background -->




<!-- Calendly inline widget begin -->
<div class="bg-gray-100 ">
  <div class="max-w-7xl mx-auto py-16 px-4  sm:py-24 sm:px-6 lg:px-8">
<div class="calendly-inline-widget" data-url="https://calendly.com/lambent_co/30min" style="min-width:320px;height:630px;"></div>

<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>

<!-- Calendly inline widget end -->
</div>
</div>
@include('footer')

@endsection