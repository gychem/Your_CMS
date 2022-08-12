<x-layout>

<div class="container mb-3">
    <div class="w-full bg-white">
        <article rel="noopener noreferrer" class="bg-white rounded shadow-md mx-auto group hover:no-underline focus:no-underline dark:bg-gray-700">
            <img role="presentation" class="object-cover w-full rounded h-96 dark:bg-gray-500" src="{{ $article->image }}">
            <div class="p-6 space-y-2">
                <div class="flex justify-between">
                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline dark:text-white">{{ $article->title }}</h3>
                    <div class="relative align-rght">
                        <span class="text-xs dark:text-gray-400">Article published on {{ $article->created_at }}</span>
                    </div>
                </div>

                <span class="text-xs dark:text-gray-400">By <a href="/news/authors/{{ $article->author->username }}">{{ $article->author->username }}</a></span>
                    <span class="text-xs dark:text-gray-400"> in {{ $article->category->name }}</span><br>

                <section class="dark:text-gray-300">
                    <p><?php echo $article->body ?></p>
                </section>
            </div>
        </article>
    </div>

    <div class="w-full rounded shadow-md mt-4 bg-white pl-6 pr-6 pt-2 pb-2 dark:bg-gray-700">
        <form method="POST" action="/news/{{ $article->slug }}/comment">
            @csrf
            <header class="flex items-center">
                <div class="flex-shrink-0"> 
                    <img class="rounded shadow-md mt-1" src="https://i.pravatar.cc/60?u={{ auth()->user()->id }}" width="60" height="60" alt="">
                </div>
                <h2 class="ml-4 w-11/12 dark:text-gray-300">Comment</h2>
            </header>

            <div class="mt-4">
                <textarea name="body" id="body" class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" cols="30" rows="5" placeholder="Write your comment in this textarea"></textarea>
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