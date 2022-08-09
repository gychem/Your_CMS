<x-layout>

<x-admin-nav />

<div class="w-full max-w-xxl">

             <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-white">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            id
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Rank
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Edit
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)   
                        <tr class="bg-white border-b dark:bg-gray-700 dark:border-gray-400">
                            <td class="py-4 px-6">
                                {{ $user->id }}
                            </td>
                            <td class="py-4 px-6">
                            {{ $user->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $user->email }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $user->rank }}
                            </td>
                            <td class="py-4 px-6">
                                <a href="/admin/users/edit/{{ $user->id }}">E</a>
                            </td>
                            <td class="py-4 px-6">
                            <a href="/admin/users/delete/{{ $user->id }}">D</a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>



</x-layout>