<x-layout>

<div class="container mt-3">
    <div class="row flex justify-center">
        <div class="w-full max-w-xl">
    <form action="contact" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="name" value="{{ old('name') }}" placeholder="Your Name">
            @error('name')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('name')
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                E-mail address
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" value="{{ old('email') }}" placeholder="E-mail address">
            @error('email')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>  
            @enderror('email')
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                Message
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" style="height: 150px" name="message" id="message" type="message" value="{{ old('message') }}" placeholder="Enter message"></textarea>
            @error('message')
                <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror('message') 
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Send
            </button>
        </div>
    </form>
</div> 

</x-layout>