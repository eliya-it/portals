<section
    class="relative w-full h-[28rem] md:h-[32rem] bg-gradient-to-br from-primary to-laravel flex flex-col justify-center items-center text-center space-y-8 mb-8 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-20 bg-no-repeat bg-center transform scale-150"
        style="background-image: url('images/laravel-logo.png'); filter: brightness(1.2);"></div>
    <div class="absolute inset-0 bg-gradient-to-br from-primary/60 to-laravel/60"></div>

    <div class="z-10 px-6 max-w-4xl mx-auto">
        <h1
            class="text-4xl md:text-6xl lg:text-7xl font-extrabold uppercase text-white tracking-tight animate-fade-in drop-shadow-lg">
            Portals
        </h1>
        <p class="text-lg md:text-2xl lg:text-3xl text-gray-100 font-semibold mt-4 mb-8 animate-slide-up">
            Discover or Share Premier Laravel Jobs & Projects
        </p>
        <div class="animate-slide-up delay-200 flex flex-col sm:flex-row gap-4 justify-center">
            @auth
                <a href="/listings/create"
                    class="inline-flex items-center bg-white text-primary py-3 px-10 rounded-full uppercase font-semibold text-base md:text-lg hover:bg-primary hover:text-white border-2 border-white hover:border-primary transition-all duration-300 shadow-xl hover:shadow-2xl">
                    <i class="fa-solid fa-plus mr-2"></i> Post a Job
                </a>
            @else
                <a href="/register"
                    class="inline-flex items-center bg-white text-primary py-3 px-10 rounded-full uppercase font-semibold text-base md:text-lg hover:bg-primary hover:text-white border-2 border-white hover:border-primary transition-all duration-300 shadow-xl hover:shadow-2xl">
                    <i class="fa-solid fa-user-plus mr-2"></i> Sign Up to List
                </a>
                <a href="/login"
                    class="inline-flex items-center bg-transparent text-white py-3 px-10 rounded-full uppercase font-semibold text-base md:text-lg hover:bg-white hover:text-primary border-2 border-white transition-all duration-300 shadow-xl hover:shadow-2xl">
                    <i class="fa-solid fa-arrow-right-to-bracket mr-2"></i> Login
                </a>
            @endauth
        </div>
    </div>
</section>