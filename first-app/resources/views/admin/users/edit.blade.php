<x-layout>

<div class="container mt-3 mb-3">
    <div class="row flex justify-center">

    <x-admin-nav />

    <div class="w-full max-w-xxl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    
        <form action="/admin/users/edit/{{ $user->id }}" method="POST" class="mt-6">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="name" value="{{ $user->name }}" placeholder="Name">
            @error('name')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('name')
        </div>
        <div class="mb-4">
            <div class="relative items-center justify-center overflow-hidden">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="rank">
                    Rank
                </label>
                <select name="rank" id="rank" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option name="rank" id="rank" value="user">User</option>
                    <option name="rank" id="rank" value="admin">Admin</option>
                </select>
                @error('rank')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror ('rank')       
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                E-mail
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" value="{{ $user->email }}" placeholder="E-mail">
            @error('email')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('email')
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" value="{{ $user->password }}">
            @error('password')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('password')
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Edit
            </button>
        </div>
    </form>

        </div>
    </div>


    </div>
</div>

</x-layout>

