<x-profilepage>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="title">
                Profile Title
            </label>
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="title" id="title" value="{{ $profile->title }}">
            @error('title')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('title')
        </div>
        <div class="mb-4">
            <div class="relative items-center justify-center overflow-hidden">
                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="profileImage">
                    Profile Image
                </label>
                <input type="file" name="profileImage"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                @error('image')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror ('image')       
            </div>
        </div>
        <div class="mb-4">
            <div class="relative items-center justify-center overflow-hidden">
                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="headerImage">
                    Header Image
                </label>
                <input type="file" name="headerImage"
                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                @error('image')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror ('image')       
            </div>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="body">
                Description
            </label>
            <textarea class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" style="height: 150px" name="body" id="body" placeholder="Enter excerpt">{{ $profile->body }}</textarea>
            @error('excerpt')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror('excerpt') 
        </div>
        <div class="flex items-center justify-between">
            <x-button>
                Edit
            </x-button>
        </div>
    </form>

</x-profilepage>