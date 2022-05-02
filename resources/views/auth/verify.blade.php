@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">

        <main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
    <div class="min-w-0 flex-1">
              <h3 class="text-base font-medium text-gray-900">
                <span class="rounded-sm focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <p>You will be redirected back to homepage in <span id="counter">10</span> second(s).</p>
                        <script type="text/javascript">
                        function countdown() {
                            var i = document.getElementById('counter');
                            if (parseInt(i.innerHTML)<=0) {
                                location.href = '/';
                            }
                        if (parseInt(i.innerHTML)!=0) {
                            i.innerHTML = parseInt(i.innerHTML)-1;
                        }
                        }
                        setInterval(function(){ countdown(); },1000);
                        </script>
                </span>
              </h3>
              <p class="text-base text-gray-500">Thank you for your time just nothing to see here</p>
            </div>
    </div>
</main>
        </div>
    </div>
</main>
@endsection
