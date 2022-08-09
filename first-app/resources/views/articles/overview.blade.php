<x-layout>

<div class="container mb-3">
    <div class="w-full">
        <div class="container max-w-6xl p-3 mx-auto space-y-6 sm:space-y-12">
            <!-- <a rel="noopener noreferrer" href="#" class="block bg-white rounded shadow-md max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12 dark:bg-gray-900">
                <img src="https://source.unsplash.com/random/480x360" alt="" class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7 dark:bg-gray-500">
                <div class="p-6 space-y-2 lg:col-span-5">
                    <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster tincidunt reprimique ad pro</h3>
                    <span class="text-xs dark:text-gray-400">February 19, 2021</span>
                    <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent doctus id.</p>
                </div>
            </a> -->
            <div class="grid justify-center grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($articles as $article) 
                    <a rel="noopener noreferrer" href="/news/{{ $article->slug }}" class="bg-white rounded shadow-md  w-full mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
                        <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?1">
                        <div class="p-6 space-y-2">
                            <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline dark:text-white">{{ $article->title }}</h3>
                            <span class="text-xs dark:text-gray-700">{{ $article->created_at }}</span>
                            <p class="dark:text-gray-400">{{ $article->excerpt }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="flex justify-center">
                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Load more posts...</button>
            </div>

        </div>
    </div>
</div>


</x-layout>