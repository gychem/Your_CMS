<x-layout>

<div class="container mt-3">
    <div class="row flex justify-center">
        <div class="w-full max-w-xs">

            <div class="bg-white shadow-md max-w-xs rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-700">

                    @if (Session::has('message'))
                        <div class="alert alert-success mb-4 dark:text-gray-300" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    <form action="{{ route('forget.password.post') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300" for="password">
                                E-Mail Address
                            </label>
                            <input type="text" id="email_address" class="border-white shadow w-full rounded py-2 px-3 text-gray-700 disable-outline shadow-outline" name="email" required autofocus>
                            @error('email')
                                <div class="text-red-500 text-xs italic">{{ $message }}</div>
                            @enderror('email') 
                        </div>



                        <div class="col-md-6 offset-md-4 flex justify-center">
                            <x-button>
                                Send Password Reset Link
                            </x-button>
                        </div>
                    </form>
                    
                </div>

            </div>
        </div>
    </div>


</x-layout>