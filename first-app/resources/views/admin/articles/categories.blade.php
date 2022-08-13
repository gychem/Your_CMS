<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-4 mb-1 dark:bg-gray-700 dark:text-white">

        <form action="{{route('admin/news/categories/create')}}" method="POST" class="flex">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="category">
                    Create a new category
                </label>
                <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Category name">
                @error('category')
                    <div class="text-red-500 text-xs italic">{{ $message }}</div>  
                @enderror('category')
            </div>
            <div class="flex items-center justify-between ml-4 mt-3">
                <x-button class="text-gray-800 bg-gray-50 hover:bg-gray-100 py-2 px-4 rounded shadow-md dark:text-gray-300 dark:bg-gray-800 dark:hover:bg-gray-600">
                    Add
                </x-button>
            </div>
        </form>
    </div>

    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-800 dark:text-white">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Category ID
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Edit
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)   
                    <tr onclick="window.location='/admin/news/categories/{{ $category->slug }}';" class="cursor-pointer bg-white border-b hover:bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:hover:bg-gray-600">
                        <td class="py-4 px-6">
                            {{ $category->id }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $category->name }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/admin/news/categories/edit/{{ $category->slug }}">
                                <svg class="w-6 h-6 icon-hover-color-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> 
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <a href="/admin/news/categories/delete/{{ $category->slug }}">
                                <svg class="w-6 h-6 icon-hover-color-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</div>

</x-layout>