<x-layout>

<div class="container mb-3">

    <header class="w-full rounded">
        
        <img class="w-full h-96" src="https://source.unsplash.com/random"></img>
        
    </header>


    <div class="w-full bg-white rounded shadow-md mx-auto dark:bg-gray-700"> 

        <div class="absolute z-10" style="width:200px; margin-top:-9%; margin-left:3%;">
            <img class="rounded-full shadow-md"  src="{{ $profile[0]['image'] }}"></img>
            <center><span class="font-semibold">{{ $profile[0]['username'] }}</span></center>
        </div>
            
        <div class="bg-gray-200 w-4/5 font-semibold flex justify-end absolute right-1/5 pr-2">
            {{ $profile[0]['title'] }}
        </div>

        <main class="flex">

            <div class="relative bg-gray-50 w-1/4">
                <div class="bg-white w-4/5 p-4 mt-24 mb-4 ml-6 rounded">
                test
                </div>
            </div>

            <div class="p-10">
            {{ $profile[0]['body'] }}
            </div>

        </main>

    </div>
</div>

</x-layout>