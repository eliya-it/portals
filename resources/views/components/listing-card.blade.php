@props(['listing'])

<x-card
    class="p-6 bg-white shadow-lg hover:shadow-xl transition-all duration-300 rounded-xl border border-gray-100 group transform hover:-translate-y-1">
    <div class="flex flex-col md:flex-row gap-6 items-center md:items-start">
        <div class="relative flex-shrink-0">
            <img class="w-24 h-24 md:w-28 md:h-28 rounded-full object-cover border-2 border-gray-200 shadow-sm"
                src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                alt="{{$listing->company}} logo" />
            <div
                class="absolute inset-0 rounded-full bg-gradient-to-r from-primary/30 to-laravel/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
        </div>
        <div class="flex-1 text-center md:text-left">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-2">
                <a href="/listings/{{$listing->id}}"
                    class="relative hover:text-primary transition-colors duration-200 after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-primary after:bottom-0 after:left-0 after:transition-all after:duration-300 hover:after:w-full">
                    {{$listing->title}}
                </a>
            </h3>
            <div class="text-lg font-medium text-gray-700 mb-3">{{$listing->company}}</div>
            <x-tags :tags="$listing->tags" class="mb-4 flex flex-wrap gap-2 justify-center md:justify-start" />
            <div class="text-md text-gray-600 flex items-center justify-center md:justify-start">
                <i class="fa-solid fa-location-dot text-primary mr-2"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>