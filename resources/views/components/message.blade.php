@if(session()->has('message'))
    
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show"
     class="fixed top-4 left-1/2
        transform -translate-x-1/2 bg-gradient-to-r from-primary to-laravel text-white px-6 py-4 rounded-lg shadow-lg z-50 max-w-md w-full"        <p>

                {{session('message')}}
        </p>
    </div>
@endif                