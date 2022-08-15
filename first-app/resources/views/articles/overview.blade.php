<x-layout>

<div class="container mb-3">
    <div class="w-full">

        <form action="{{ route('news/search') }}" class="w-full flex gap-2 text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-white p-2 rounded" method="POST">
        @csrf
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="search" id="search" type="text" placeholder="Search on title...">  
            <x-button>Search</x-button>
        </form>

        <div class="container w-full mt-3 mx-auto space-y-6 sm:space-y-12">
            <a rel="noopener noreferrer" href="/news/{{ $data['firstArticle']->slug }}" class="block bg-white rounded shadow-md max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                <img src="{{ $data['firstArticle']->image }}" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold sm:text-4xl dark:text-white">{{ $data['firstArticle']->title }}</h3>
                    <span class="text-xs dark:text-gray-500">{{ $data['firstArticle']->created_at }}</span>
                    <p  class="dark:text-gray-400">{{ $data['firstArticle']->excerpt }}.</p>
                </div>
            </a>
            <div class="grid justify-center grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
             
                @foreach ($data['articles'] as $article) 
                    <a rel="noopener noreferrer" href="/news/{{ $article->slug }}" class="bg-white hover:bg-gray-100 rounded shadow-md  w-full mx-auto group hover:no-underline focus:no-underline dark:bg-gray-700 dark:hover:bg-gray-800">
                        <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="{{ $article->image }}">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold dark:text-white">{{ $article->title }}</h3>
                            <span class="text-xs dark:text-gray-500">{{ $article->created_at }}</span>
                            <p class="dark:text-gray-400">{{ $article->excerpt }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

        
            {{ $data['articles']->links('components.pagination') }}
              
           

        </div>
    </div>
</div>


</x-layout>