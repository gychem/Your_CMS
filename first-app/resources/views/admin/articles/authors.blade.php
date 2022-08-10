<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)   
                        <tr onclick="window.location='#';" class="cursor-pointer bg-white hover:bg-gray-50 border-b dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-slate-600">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $author }}
                            </th>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
</div>

</x-layout>