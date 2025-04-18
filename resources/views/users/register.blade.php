<x-layout>
    <div class="bg-white shadow-xl rounded-lg p-10 max-w-md mx-auto mt-24 border border-gray-100">
        <header class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-wide">
                Register
            </h2>
            <p class="mt-2 text-gray-600">Create an account to start posting Jobs</p>
        </header>

        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    Name
                </label>
                <input type="text" id="name"
                    class="border border-gray-300 rounded-lg p-3 w-full focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                    name="name" value="{{old('name')}}" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email
                </label>
                <input type="email" id="email"
                    class="border border-gray-300 rounded-lg p-3 w-full focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                    name="email" value="{{old('email')}}" />
                <p class="text-red-500 text-xs mt-2 hidden">
                    Please enter a valid email
                </p>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                    Password
                </label>
                <input type="password" id="password"
                    class="border border-gray-300 rounded-lg p-3 w-full focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                    name="password" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                    Confirm Password
                </label>
                <input type="password" id="password_confirmation"
                    class="border border-gray-300 rounded-lg p-3 w-full focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                    name="password_confirmation" value="{{old('password_confirmation')}}" />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-primary to-laravel text-white rounded-lg py-3 px-6 hover:from-laravel hover:to-primary transition-all duration-300 font-semibold">
                    Sign Up
                </button>
            </div>

            <div class="text-center mt-6">
                <p class="text-gray-600">
                    Already have an account?
                    <a href="/login" class="text-primary hover:underline font-medium">Login</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>