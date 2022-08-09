<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            
        <x-admin_articles_menu />


        <form action="{{route('admin/news/categories/create')}}" method="POST" class="mt-6 flex">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                Category Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Category name">
            @error('category')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('category')
        </div>
        <div class="flex items-center justify-between ml-4 mt-3">
            <x-button>
                Add
            </x-button>
        </div>
    </form>

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            Open
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)   
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $category->id }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $category->name }}
                            </td>
                            <td class="py-4 px-6">
                               <a href="">E</a>
                            </td>
                            <td class="py-4 px-6">
                                O
                            </td>
                            <td class="py-4 px-6">
                                <a href="/admin/news/categories/delete/{{ $category->id }}">D</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</x-layout>