<x-layout>

<div class="container mb-3 relative">

    <header class="w-full rounded">
        <img class="w-full h-80 rounded" src="/images/profiles/default-header.png"></img>
    </header>


    <div class="w-full flex bg-white rounded shadow-md mx-auto dark:bg-gray-700"> 

        <div class="z-10 relative ml-6" style="max-width:200px; margin-top:-130px;">

            <img class="rounded-full shadow-md"  src="{{ $profile->image }}"></img>
            <div class="text-center">
                <span class="font-semibold text-2xl capitalize dark:text-white">{{ $profile->username }}</span><br>
                <span class="font-semibold capitalize text-slate-400">{{ $profile->title }}</span>
            </div>    

            <div class="bg-slate-800 p-4 mt-4 mb-4 rounded text-white">
                test
            </div>

        </div>
            
        <div class="w-full pl-4 pr-4">
            <div class="p-10 gap-4 flex w-full justify-end mr-10" style="margin-top:-100px">   
                <x-button-link href="/profile/message">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    Message
                </x-button-link>
                <x-button-link href="/profile/follow">Follow</x-button-link>
                <x-button-link href="/profile/add-friend">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </x-button-link>
                <x-button-link href="/profile/{{ $profile->username }}/edit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </x-button-link>
            </div>

            <div class="p-4 w-full bg-slate-50 dark:bg-gray-600 rounded dark:text-slate-200">
                {{ $slot }}
            </div>
        </div>
    </div>

</div>

</x-layout>