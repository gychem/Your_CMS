<x-layout>

<div class="container mb-3">
    <div class="w-full bg-white">
        <article rel="noopener noreferrer" class="bg-white rounded shadow-md mx-auto group hover:no-underline focus:no-underline dark:bg-gray-700">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold dark:text-white">{{ $page->name }}</h3>
                <span class="text-xs dark:text-gray-400">Slug: {{ $page->slug }}</span>
                <p><?php echo $page->body; ?></p>
            </div>
        </article>
    </div>

</x-layout>