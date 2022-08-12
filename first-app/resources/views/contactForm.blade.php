<x-layout>

<div class="container mt-3">
    <div class="row flex justify-center">
        <div class="w-full max-w-xl">
    <form action="contact" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-700">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="name">
                Name
            </label>
            <input class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" value="{{ old('name') }}" placeholder="Your Name">
            @error('name')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('name')
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="email">
                E-mail address
            </label>

            <input class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" value="{{ old('email') }}" placeholder="E-mail address">
           
            @error('email')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('email')
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="message">
                Message
            </label>

            <textarea class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" rows="5" name="message" value="{{ old('message') }}" placeholder="Enter message">tesd</textarea>

            @error('message')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror('message') 
        </div>
        <div class="flex items-center justify-between">
            <x-button>
                Send
            </x-button>
        </div>
    </form>
</div> 

</x-layout>