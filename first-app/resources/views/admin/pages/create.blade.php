<x-layout>

<div class="container mt-3 mb-3">
    <div class="row flex justify-center">

    <x-admin-nav />

    <div class="w-full max-w-xxl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-700">

        <form action="{{route('admin/pages/create')}}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="name">
                Page Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="name" value="{{ old('name') }}" placeholder="Page Name">
            @error('name')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('name')
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="body">
                Body
            </label>
            <textarea id="sunEditor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" style="height: 250px" name="body" type="body" value="{{ old('body') }}" placeholder="Page Body"></textarea>
            @error('body')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror('body') 
        </div>
        <div class="flex items-center justify-between">
            <x-button>
                Add
            </x-button>
        </div>
    </form>

        </div>
    </div>


    </div>
</div>

</x-layout>

