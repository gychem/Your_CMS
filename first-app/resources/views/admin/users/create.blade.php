<x-layout>

<div class="container mt-3 mb-3">
    <div class="row flex justify-center">

    <x-admin-nav />

    <div class="w-full max-w-xxl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-700">
            
        <form action="{{ route('admin/users/create') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="username">
                Username
            </label>
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="username" id="username" type="text" value="{{ old('username') }}" placeholder="Username">
            @error('username')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('username')
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="email">
                Email
            </label>
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="email" id="email" type="email" value="{{ old('email') }}" placeholder="E-mail">
            @error('email')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('email')
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="password">
                Password
            </label>
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="password" id="password" type="password" placeholder="***********">
            @error('password')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('password')
        </div>

        <div class="flex items-center justify-between">
            <x-button>
                Create
            </x-button>
        </div>
    </form>

        </div>
    </div>


    </div>
</div>

</x-layout>

