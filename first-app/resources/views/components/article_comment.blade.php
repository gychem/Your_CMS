@props(['comment'])
<div class="w-full rounded shadow-md mt-4 bg-slate-50 pl-6 pr-6 pt-2 pb-2">
    <div class="flex pb-1 pt-1">
        <div class="flex-shrink-0"> 
            <img class="rounded shadow-md mt-1" src="https://www.gravatar.com/avatar/2c7d99fe281ecd3bcd65ab915bac6dd5?s=250" width="60" height="60" alt="">
        </div>
        <div class="ml-4 w-11/12">
            <header>
                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at }}</time>
                </p>
            </header>
            <p>
                {{ $comment->body }}
            </p>
        </div>
    </div>
</div>