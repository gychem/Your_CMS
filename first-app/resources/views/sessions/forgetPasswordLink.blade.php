<x-layout>

<div class="container mt-3">
    <div class="row flex justify-center">
        <div class="w-full max-w-xs">
            <div class="bg-white shadow-md max-w-xs rounded px-8 pt-6 pb-4 mb-2 dark:bg-gray-700">
  
                <form action="{{ route('reset.password.post') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-4">
                        <label for="email_address" class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">
                            E-Mail Address
                        </label>
                        <input type="text" id="email_address" class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="email" required autofocus>
                        @error('email')
                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                        @enderror('email') 
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">
                            Password
                        </label>
                        <input type="password" id="password" class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="password" required autofocus>
                        @error('password')
                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                        @enderror('password') 
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">
                            Confirm Password
                        </label>
                        <input type="password" id="password-confirm" class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="password_confirmation" required autofocus>
                        @error('password')
                            <div class="text-red-500 text-xs italic">{{ $message }}</div>
                        @enderror('password') 
                    </div>

                    <div class="col-md-6 offset-md-4 mt-4 flex justify-center">
                        <x-button>
                            Reset Password
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>           
</div>

</x-layout>