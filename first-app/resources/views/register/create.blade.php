<x-layout>

<div class="container mt-3">
    <div class="row flex justify-center">
        <div class="w-full max-w-xs">
            <form action="register" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-800">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="username">
                        Username
                    </label>
                    <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="username" id="username" value="{{ old('username') }}" placeholder="Your Name">
                    @error('username')
                        <div class="text-red-500 text-xs italic">{{ $message }}</div>  
                    @enderror('username')
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="email">
                        E-mail address
                    </label>
                    <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="email" id="email" value="{{ old('email') }}" placeholder="E-mail address">
                    @error('email')
                        <div class="text-red-500 text-xs italic">{{ $message }}</div>  
                    @enderror('email')
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="password">
                        Password
                    </label>
                    <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="password" id="password" type="password" placeholder="******************">
                    @error('password')
                        <div class="text-red-500 text-xs italic">{{ $message }}</div>
                    @enderror('password') 
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!-- @foreach ($errors->all() as $error) SHOW ALL ERROR ON THE BOTTOM

    <li class="text-danger text-xs h6">{{ $error }}</li>

@endforeach -->

</x-layout>