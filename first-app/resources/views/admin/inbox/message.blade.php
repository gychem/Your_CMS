<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-700 dark:text-white">

        <header class="flex justify-between border-b-2 border-slate-400">
            <div>{{ $message->name }} <span class="ml-1">( {{ $message->email }} )</span></div>
            <div>{{ $message->created_at }}</div>
        </header>

        {{ $message->message }}
    </div>

</div>

</x-layout>