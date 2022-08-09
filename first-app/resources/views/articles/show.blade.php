<x-layout>

<div class="container mb-3">
    <div class="w-full bg-white">
        <article rel="noopener noreferrer" class="bg-white rounded shadow-md mx-auto group hover:no-underline focus:no-underline dark:bg-gray-900">
            <img role="presentation" class="object-cover w-full rounded h-96 dark:bg-gray-500" src="https://source.unsplash.com/random/480x360?1">
            <div class="p-6 space-y-2">
                <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{ $article->title }}</h3>
                <span class="text-xs dark:text-gray-400">{{ $article->created_at }} - Category: {{ $article->category->name }}</span>
                <p><?php echo $article->body ?></p>
            </div>
        </article>
    </div>

    <div class="w-full rounded shadow-md mt-4 bg-white pl-6 pr-6 pt-2 pb-2">
        <form method="POST" action="/news/{{ $article->id }}/comment">
            @csrf
            <header class="flex items-center">
                <div class="flex-shrink-0"> 
                    <img class="rounded shadow-md mt-1" src="https://i.pravatar.cc/60?u={{ auth()->user()->id }}" width="60" height="60" alt="">
                </div>
                <h2 class="ml-4 w-11/12">Post a comment</h2>
            </header>

            <div class="mt-4">
                <textarea name="body" id="body" class="w-full text-sm shadow-md focus:outline-none p-4" cols="30" rows="5" placeholder="Write a comment"></textarea>
                @error('body')
                    <div class="text-red-500 text-xs italic">{{ $message }}</div>
                @enderror('body') 
            </div>

            <div class="flex items-center justify-end mt-2 mr-6">
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded" type="submit">
                    Post
                </button>
            </div>
        </form>
    </div>
        
    @foreach($article->comments as $comment)
        <x-article_comment :comment="$comment" />
    @endforeach

    <div class="flex justify-center mt-6">
        <a href="{{route('news')}}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline">Go back to overview</a>
    </div>

</x-layout>