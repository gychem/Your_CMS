<x-layout>

<div class="container mt-3 mb-3">
    <div class="w-full flex">

        <div class="w-4/5 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-800 dark:text-white">
            Welcome to Your CMS, <br><br>
            Your CMS is currenrly in development.<br>
            Follow us on social media to stay up to date with the progress!<br><br><br>

            <h2 class="text-xl"><b>Current Features</b></h2><hr><br>

            <b>Admin Panel</b>
            <ul class="text-slate-400">
                <li>Create and manage news articles, categories, authors, pages and users.</li>
                <li>Inbox for contact messages.</li>
            </ul>

            <br>

            <b>User System</b>
            <ul class="text-slate-400">
                <li>Login & register</li>
                <li>Forgot password</li>
                <li>User ranks</li>
                <li>Profile Pages [In Progress]</li>
            </ul>

            <br>

            <b>Contact</b>
            <ul class="text-slate-400">
                <li>Auto filler for input fields when logged in.</li>
                <li>Contact messages are sent to e-mail and admin inbox.</li>
            <ul> 
        </div>

    <div class="p-4 w-1/5 bg-white rounded border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 ml-2">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white ">Latest Users</h3>
            <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500 ml-2">
                View all
            </a>
        </div>
        <div class="">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($users as $user) 
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full" src="{{ $user->image }}" alt="{{ $user->username }} profile  image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    {{ $user->username }}
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

</div>

</x-layout>