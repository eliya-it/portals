<x-layout>
    <div class="bg-white shadow-xl rounded-lg p-10 max-w-md mx-auto mt-24 border border-gray-100">
        <header class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 uppercase tracking-wide">
                Login
            </h2>
            <p class="mt-2 text-gray-600">Sign in to access your Portals account</p>
        </header>

        <form method="POST" action="/users/auth">
            @csrf
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email
                </label>
                <input type="email" id="email"
                    class="border border-gray-300 rounded-lg p-3 w-full focus:ring-2 focus:ring-primary focus:border-primary transition-colors"
                    name="email" value="{{old('email')}}" required />
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
                    name="password" required />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6 flex items-center justify-between">
                <label class="flex items-center text-sm text-gray-600">
                    <input type="checkbox" name="remember"
                        class="mr-2 h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                    Remember me
                </label>
                <a href="/forgot-password" class="text-sm text-primary hover:underline">Forgot Password?</a>
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-primary to-laravel text-white rounded-lg py-3 px-6 hover:from-laravel hover:to-primary transition-all duration-300 font-semibold">
                    Sign In
                </button>
            </div>

            <div class="text-center mt-6">
                <p class="text-gray-600">
                    Don't have an account?
                    <a href="/register" class="text-primary hover:underline font-medium">Register</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>