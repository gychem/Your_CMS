<x-layout>

<div class="container mt-3 mb-3">
    <div class="row flex justify-center">

    <x-admin-nav />

    <div class="w-full max-w-xxl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-700">
    
        <form action="/admin/users/edit/{{ $user->id }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="username">
                Username
            </label>
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="username" id="username" value="{{ $user->username }}" placeholder="Username">
            @error('username')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('username')
        </div>
        <div class="mb-4">
            <div class="relative items-center justify-center overflow-hidden">
                <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="rank">
                    Rank
                </label>
                <select name="rank" id="rank" class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline">
                    <option name="rank" id="rank" value="{{ $user->rank }}" selected>{{ $user->rank }}</option>
                    <option name="rank" id="rank" value="user">User</option>
                    <option name="rank" id="rank" value="admin">Admin</option>
                </select>
                @error('rank')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror ('rank')       
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="email">
                E-mail
            </label>
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="email" id="email" type="email" value="{{ $user->email }}" placeholder="E-mail">
            @error('email')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('email')
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="password">
                Password
            </label>
            <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="password" id="password" type="password" value="{{ $user->password }}">
            @error('password')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('password')
        </div>
        <div class="flex items-center justify-between">
            <x-button>
                Edit
            </x-button>
        </div>
    </form>

        </div>
    </div>


    </div>
</div>

</x-layout>

