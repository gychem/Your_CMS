<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">

        <x-admin_pages_menu />

        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-2">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-white">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Link
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Edit
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Open
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)   
                        <tr class="bg-white border-b dark:bg-gray-700 dark:border-gray-700">
                            <td class="py-4 px-6">
                                {{ $page->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $page->slug }}
                            </td>
                            <td class="py-4 px-6">
                            <a href="/admin/pages/edit/{{ $page->id }}">E</a>
                            </td>
                            <td class="py-4 px-6">
                                <a href="/{{ $page->slug }}">O</a>
                            </td>
                            <td class="py-4 px-6">
                            <a href="/admin/pages/delete/{{ $page->id }}">D</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
</div>

</x-layout>