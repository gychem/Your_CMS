<footer class="bg-white dark:bg-gray-900 p-4">
    <div class="w-4/5 md:flex md:justify-between mx-auto">
        <div class="mb-6 md:mb-0 w-[250px]">
            <form action="{{route('admin/news/create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="block text-gray-700 text-lg font-bold mb-2 dark:text-gray-300 w-[100px]" for="newsletter-email">
                SUBSCRIBE TO OUR NEWSLETTER
                </label>
                <div class="flex gap-4">
                    <input class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="newsletter-email" id="newsletter-email" type="email" value="{{ old('newsletter-email') }}" placeholder="E-mail">
                    @error('newsletter-email')
                        <div class="text-red-500 text-xs italic">{{ $message }}</div>  
                    @enderror('newsletter-email')
                    <x-button>
                        Submit
                    </x-button>
                </div>
            </form>
        </div>
        <div class="flex gap-12">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Laravel</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Tailwind CSS</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Support</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="#" class="hover:underline ">Forums</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="hover:underline">Help Center</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Your CMS</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="/contact" class="hover:underline">Contact</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">About Us</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Jobs</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow Us</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="/contact" class="hover:underline">Facebook</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Twitter</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Github</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 w-4/5 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="w-4/5 mx-auto sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            &copy; Copyright {{ date("Y"); }} - Terms of Service, Privacy Policy
        </span>

        <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                <span class="sr-only">Facebook page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                <span class="sr-only">GitHub account</span>
            </a>
        </div>
    </div>
</footer>