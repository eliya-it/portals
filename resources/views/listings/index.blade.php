<x-layout>
    @include('partials._hero')
    @include('partials._search')

    <div class="container mx-auto px-4 py-12">
        @if($listings->isNotEmpty())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing"
                        class="relative group transform hover:-translate-y-2 transition-all duration-300 bg-white shadow-lg rounded-xl overflow-hidden" />
                @endforeach
            </div>
        @else
            <div class="text-center py-16 bg-gray-50 rounded-lg shadow-sm">
                <i class="fa-solid fa-magnifying-glass text-4xl text-gray-400 mb-4"></i>
                <p class="text-2xl text-gray-700 font-semibold">No Jobs Found</p>
                <p class="text-gray-500 mt-3">Try refining your search or check back later for new opportunities.</p>
                <a href="/"
                    class="mt-6 inline-flex items-center bg-gradient-to-r from-primary to-laravel text-white py-3 px-8 rounded-full hover:from-laravel hover:to-primary transition-all duration-300 font-medium">
                    <i class="fa-solid fa-home mr-2"></i> Explore More
                </a>
            </div>
        @endif
    </div>

    @if($listings->hasPages())
        <div class="container mx-auto px-4 pb-8">
            <div class="flex justify-center">
                {{$listings->links('pagination::tailwind')}}
            </div>
        </div>
    @endif
</x-layout>