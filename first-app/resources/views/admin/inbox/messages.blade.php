<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-800 dark:text-white">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        From
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)   
                    <tr onclick="window.location='/admin/inbox/{{ $message->id }}';" class="bg-white border-b cursor-pointer hover:bg-slate-50 dark:bg-gray-700 dark:border-gray-700 dark:hover:bg-slate-600">
                        <td class="py-4 px-6">
                            {{ $message->created_at }}
                        </td>
                        <td class="py-4 px-6">
                        {{ $message->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $message->email }}
                        </td>
                        <td class="py-4 px-6">
                        <a href="/admin/inbox/delete/{{ $message->id }}">
                            <svg class="w-6 h-6 icon-hover-color-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-layout>