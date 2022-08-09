<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-white">
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
                        Open
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)   
                    <tr class="bg-white border-b dark:bg-gray-700 dark:border-gray-700">
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
                            <a href="/admin/inbox/{{ $message->id }}">O</a>
                        </td>
                        <td class="py-4 px-6">
                        <a href="/admin/inbox/delete/{{ $message->id }}">D</a>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-layout>