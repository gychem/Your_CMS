@if (session()->has('success'))
    <div    x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 4000)" 
            x-show="show"
            class="absolute right-0 bottom-0 bg-slate-200 dark:bg-slate-600 dark:text-slate-200 rounded text-center z-10" style="width:50%; font-size: 25px;">
        <p>{{ session('success') }}</p>
    </div>
@endif