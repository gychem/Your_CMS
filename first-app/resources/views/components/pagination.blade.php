<div class="flex mt-2 justify-between">


@if ($paginator->hasPages())
    <ul>
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <a href="#" aria-label="Previous">
                    <x-button>Previous</x-button>
                </a>
            </li>
@else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><x-button>Previous</x-button></a></li>
@endif
    </ul>
    <ul class="flex gap-2">
@foreach ($elements as $element)
    @if (is_string($element))
            <li class="disabled font-semibold text-gray-800 bg-gray-50 hover:bg-gray-100 py-2 px-4 rounded shadow-md dark:text-gray-300 dark:bg-gray-500 dark:hover:bg-gray-600">{{ $element }}</li>
    @endif

    @if (is_array($element))

        @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                        <li class="active mt-2">
                            <a href="#" class="font-semibold text-gray-800 bg-gray-50 hover:bg-gray-100 py-2 px-4 rounded shadow-md dark:text-gray-300 dark:bg-gray-800 dark:hover:bg-gray-600">{{ $page }}<span class="sr-only">(current)</span></a>
                        </li>
                @else
                        <li class="mt-2">
                            <a href="{{ $url }}" class="font-semibold text-gray-800 bg-gray-50 hover:bg-gray-100 py-2 px-4 rounded shadow-md dark:text-gray-300 dark:bg-gray-500 dark:hover:bg-gray-600">{{ $page }}</a>
                        </li>
                @endif
                @endforeach
            @endif
        @endforeach
    </ul>
    <ul>
        @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next"><x-button>Next</x-button></a></li>
        @else
                <li class="disabled">
                    <a href="#" aria-label="Next">
                        <x-button>Next</x-button>
                    </a>
                </li>
        @endif
    </ul>
    @endif