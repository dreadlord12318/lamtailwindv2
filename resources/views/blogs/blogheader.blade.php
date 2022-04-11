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
<div class="bg-lime-600">
    <div class="max-w-7xl mx-auto pb-24 pt-36 px-4 sm:pb-24 sm:px-6 lg:px-8 lg:flex lg:justify-between">
        <div class="max-w-xl">
            <h2 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">Lambent Blog</h2>
            <p class="mt-5 text-xl text-white">Regular updates on outsourcing life (La Vida BPO), work we've done along with documented processes (The Work), the Philippines outsourcing scene and culture (The Philippines), and our project to map BPOs in the Philippines for locators and job seekers (BPO Maps).</p>
        </div>
        <div class="mt-10 w-full max-w-xs">
            <form action="{{ action('App\Http\Controllers\SearchController@index')}}" method="GET">
            {{ csrf_field()}}
                <div class="mt-1.5 relative">
                    <select id="category" name="category_id"  onchange="this.form.submit();"
                        class="appearance-none block w-full bg-none bg-blue-700 border border-transparent rounded-md pl-3 pr-10 py-2 text-base text-white focus:outline-none focus:ring-1 focus:ring-white focus:border-white sm:text-sm">
                        <option value = "-">Select Category</option>
                        @foreach($categories as $category)
                        
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 px-2 flex items-center">
                        <!-- Heroicon name: solid/chevron-down -->
                        <svg class="h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
