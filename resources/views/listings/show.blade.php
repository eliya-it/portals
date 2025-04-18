<x-layout>
    <div class="container mx-auto px-4 py-8">
        <a href="/"
            class="inline-flex items-center text-gray-800 hover:text-primary transition-colors duration-200 mb-6 font-medium">
            <i class="fa-solid fa-arrow-left mr-2"></i> Back to Listings
        </a>
        <x-card class="p-8 md:p-12 bg-white shadow-xl rounded-xl border border-gray-100 relative">

            <div class="absolute top-4 right-4 flex flex-col sm:flex-row gap-3">
                <a href="/listings/{{$listing->id}}/edit"
                    class="flex items-center justify-center bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium text-sm">
                    <i class="fa-solid fa-pencil mr-1"></i> Edit
                </a>
                <form method="POST" action="/listings/{{$listing->id}}"
                    onsubmit="return confirm('Are you sure you want to delete this listing?');">
                    @csrf
                    @method('DELETE')
                    <button
                        class="flex items-center justify-center bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600 transition-colors duration-200 font-medium text-sm">
                        <i class="fa-solid fa-trash mr-1"></i> Delete
                    </button>
                </form>
            </div>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <div class="flex-shrink-0 relative">
                    <img class="w-24 h-24 md:w-32 md:h-32 rounded-lg object-cover border-2 border-gray-300 shadow-sm"
                        src="{{$listing->logo ? asset(path: 'storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                        alt="{{$listing->company}} logo" />
                    <div
                        class="absolute inset-0 rounded-lg bg-gradient-to-t from-gray-900/30 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <div class="flex-1 text-center md:text-left">
                    <h3 class="text-3xl font-bold text-gray-900 mb-2">{{$listing->title}}</h3>
                    <div class="text-xl text-gray-700 mb-4">{{$listing->company}}</div>
                    <x-tags :tags="$listing->tags" class="mb-4 flex flex-wrap gap-2" />
                    <div class="text-lg text-gray-600 mb-6">
                        <i class="fa-solid fa-location-dot text-primary mr-2"></i> {{$listing->location}}
                    </div>
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Job Description</h3>
                        <div class="text-gray-700 leading-relaxed mb-6">{!! nl2br(e($listing->description)) !!}</div>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="mailto:{{$listing->email}}"
                                class="flex items-center justify-center bg-gradient-to-r from-primary to-laravel text-white py-3 px-8 rounded-lg hover:from-laravel hover:to-primary transition-all duration-300 font-semibold">
                                <i class="fa-solid fa-envelope mr-2"></i> Contact Employer
                            </a>
                            <a href="{{$listing->website}}" target="_blank"
                                class="flex items-center justify-center bg-gray-900 text-white py-3 px-8 rounded-lg hover:bg-gray-800 transition-all duration-300 font-semibold">
                                <i class="fa-solid fa-globe mr-2"></i> Visit Website
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>