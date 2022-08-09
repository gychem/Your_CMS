<x-layout>

<div class="container mt-3 mb-3">
    <div class="row flex justify-center">

    <x-admin-nav />

    <div class="w-full max-w-xxl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-800">
        
        <form action="{{route('admin/news/create')}}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="title">
                Article Title
            </label>
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="title" id="title" type="title" value="{{ old('title') }}" placeholder="Article title">
            @error('title')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('title')
        </div>
        <div class="mb-4">
            <div class="relative items-center justify-center overflow-hidden">
                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="category">
                    Category
                </label>
                <select name="category" id="category" class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline">
                    @foreach ($categories as $category)
                    <option name="category" id="category" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror ('category')       
            </div>
        </div>
        <div class="mb-4">
            <div class="relative items-center justify-center overflow-hidden">
                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="image">
                    Upload Image
                </label>
                <input type="file" name="image"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                @error('image')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror ('image')       
            </div>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="excerpt">
                Excerpt
            </label>
            <textarea class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" style="height: 150px" name="excerpt" id="excerpt" type="excerpt" value="{{ old('excerpt') }}" placeholder="Enter excerpt"></textarea>
            @error('excerpt')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror('excerpt') 
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="body">
                Article Body
            </label>

            <textarea name="body" id="sunEditor" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" style="height: 250px" value="{{ old('body') }}"></textarea>

            @error('body')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror('body') 
        </div>
        <div class="flex items-center justify-between">
            <x-button id="postArticleButton">
                Add
            </x-button>



        </div>
    </form>

        </div>
    </div>


    </div>
</div>

</x-layout>

