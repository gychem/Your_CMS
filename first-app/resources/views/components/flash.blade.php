@if (session()->has('success'))
    <div    x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)" 
            x-show="show"
            class="bg-blue-500 fixed rounded mb-4 text-center inline-block align-middle text-white mx-auto z-10" style="width:50%; font-size: 25px;">
        <p>{{ session('success') }}</p>
    </div>
@endif