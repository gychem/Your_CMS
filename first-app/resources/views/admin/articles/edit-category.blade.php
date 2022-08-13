<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-4 mb-4 dark:bg-gray-700 dark:text-white">

        <form action="/admin/news/categories/edit/{{ $category->slug }}" method="POST" class="flex">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="category">
                    Edit category: {{ $category->name }}
                </label>
                <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="name" id="name" type="text" value="{{ $category->name }}" placeholder="Category name">
                @error('category')
                    <div class="text-red-500 text-xs italic">{{ $message }}</div>  
                @enderror('category')
            </div>
            <div class="flex items-center justify-between ml-4 mt-3">
                <x-button class="text-gray-800 bg-gray-50 hover:bg-gray-100 py-2 px-4 rounded shadow-md dark:text-gray-300 dark:bg-gray-800 dark:hover:bg-gray-600">
                    Edit
                </x-button>
            </div>
        </form>
    </div>


</div>

</x-layout>