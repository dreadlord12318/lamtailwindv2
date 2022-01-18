

@if (session('status'))
<div class = "relative top-16">
    <div role="alert">
  <div class="bg-lambright-600 mt-2 text-white font-bold top-10 rounded-t px-4 py-3">
    Success
  </div>
  <div class="border border-t-0 border-lambright-600 rounded-b bg-white px-4 py-3 text-newcolor-200">
    <p>  {{ session('status') }}</p>
  </div>
</div>
</div>
@endif
