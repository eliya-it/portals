<x-layout>
    <form action="/" class="max-w-3xl mx-auto mt-10">
        <div
            class="relative flex items-center bg-gray-100 rounded-xl shadow-md focus-within:ring-2 focus-within:ring-primary transition-all duration-300">
            <div class="pl-4">
                <i class="fa fa-search text-gray-500 hover:text-primary transition-colors duration-200"></i>
            </div>
            <input type="text" name="search"
                class="h-14 w-full px-4 bg-transparent focus:outline-none text-gray-700 placeholder-gray-400 font-medium"
                placeholder="Search Portals Jobs..." />
            <button type="submit"
                class="h-10 w-32 m-2 bg-gradient-to-r from-primary to-laravel text-white rounded-lg hover:from-laravel hover:to-primary transition-all duration-300 font-semibold">
                Search
            </button>
        </div>
    </form>

    <div class="container mx-auto px-4 mt-12">
        <div class="bg-white shadow-2xl rounded-2xl p-10 border border-gray-100">
            <header class="mb-10 text-center">
                <h1
                    class="text-4xl font-extrabold text-gray-900 uppercase tracking-wide bg-clip-text text-transparent bg-gradient-to-r from-primary to-laravel">
                    Manage Jobs
                </h1>
                <p class="mt-2 text-gray-600">Easily edit or remove your job listings</p>
            </header>

            <div class="overflow-x-auto">
                <table class="w-full rounded-lg">
                    <thead class="bg-gradient-to-r from-primary to-laravel text-white">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wide">Job Title</th>
                            <th class="px-6 py-4 text-center text-sm font-semibold uppercase tracking-wide">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @unless($listings->isEmpty())
                            @foreach ($listings as $listing)


                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <td class="px-6 py-6 text-lg font-medium text-gray-900">
                                        <a href="/listings/{{$listing->id}}"
                                            class="hover:text-primary transition-colors duration-200 relative after:content-[''] after:absolute after:w-0 after:h-0.5 after:bg-primary after:bottom-0 after:left-0 after:transition-all after:duration-300 hover:after:w-full">
                                            {{$listing->title}}
                                        </a>
                                    </td>
                                    <td class="px-6 py-6 text-center flex justify-center gap-4">
                                        <a href="/listings/{{$listing->id}}/edit"
                                            class="inline-flex items-center bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 shadow-sm">
                                            <i class="fa-solid fa-pen-to-square mr-2"></i> Edit
                                        </a>
                                        <form method="POST" action="/listings/{{$listing->id}}"
                                            onsubmit="return confirm('Are you sure you want to delete this job?');">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="inline-flex items-center bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors duration-200 shadow-sm">
                                                <i class="fa-solid fa-trash-can mr-2"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="border-gray-300">
                                <td class="px-4 py-8 border-rop border-b border-gray-300 text-lg">
                                    <p class="text-center">
                                        No Jobs found
                                    </p>
                                </td>
                            </tr>
                        @endunless
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>