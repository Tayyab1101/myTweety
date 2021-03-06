<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border-gray-300 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class='mb-3'>
                        <label for='username' class='block mb-2 uppercase font-bold text-xs text-gray-700'>
                            Username
                        </label>

                        <input type='text' class='border border-gray-400 p-2 w-full' name='username' id='username'
                            autocomplete="username" value="{{ old('username') }}" required>
                        @error('username')

                        <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class='mb-3'>
                        <label for='name' class='block mb-2 uppercase font-bold text-xs text-gray-700'>
                            Name
                        </label>

                        <input type='text' class='border border-gray-400 p-2 w-full' name='name' id='name'
                            autocomplete="name" value="{{ old('name') }}" required>
                        @error('name')

                        <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class='mb-3'>
                        <label for='email' class='block mb-2 uppercase font-bold text-xs text-gray-700'>
                            Email
                        </label>

                        <input type='email' class='border border-gray-400 p-2 w-full' name='email' id='email'
                            autocomplete="email" value="{{ old('email') }}" required>
                        @error('email')

                        <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class='mb-3'>
                        <label for='password' class='block mb-2 uppercase font-bold text-xs text-gray-700'>
                            Password
                        </label>

                        <input type='password' class='border border-gray-400 p-2 w-full' name='password'
                            autocomplete="current-password" id='password' required>
                        @error('password')

                        <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class='mb-3'>
                        <label for='password_confirmation' class='block mb-2 uppercase font-bold text-xs text-gray-700'>
                            Confirm Password
                        </label>

                        <input type='password' class='border border-gray-400 p-2 w-full' name='password_confirmation'
                            autocomplete="current-password_confirmation" id='password_confirmation' required>
                        @error('password_confirmation')

                        <p class='text-red-500 text-xs mt-2'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
