<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">

    <header class="flex justify-between bg-gray-100 dark:bg-gray-800 p-2">
        <div>
            <span class="text-gray-500 dark:text-white">Message from </span>
            <span class="dark:text-slate-300">{{ $message->name }}</span> 
            <span class="ml-1 mt-2 text-sm dark:text-gray-400">( {{ $message->email }} )</span>
        </div>
        <span class="text-xs text-gray-400">{{ $message->created_at }}</span>
    </header>
    <div class="bg-white shadow-md p-2 mb-4 dark:bg-gray-700 dark:text-gray-300">
        {{ $message->message }}
    </div>

</div>

</x-layout>