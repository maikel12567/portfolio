<x-app-layout>
    <div class="max-w-6xl mx-auto py-12 px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-white">My Projects</h1>
            <a
                href="{{ route('projects.create') }}"
                class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md">
                Create Project
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($projects as $project)
            <div class="bg-gray-800 rounded-lg shadow-md p-6 relative">
                @if($project->tags->isNotEmpty())
                <div class="absolute top-2 left-2">
                    @foreach($project->tags as $tag)
                    <span
                        class="bg-blue-500 text-white text-xs font-semibold py-1 px-3 rounded-full shadow-md mr-2">
                        {{ $tag->name }}
                    </span>
                    @endforeach
                </div>
                @endif

                <div class="swiper-container mb-4">
                    <div class="swiper-wrapper">
                        @foreach($project->images as $image)
                        <div class="swiper-slide">
                            <img
                                src="{{ asset('storage/' . $image->image_path) }}"
                                alt="{{ $project->title }}"
                                class="w-full h-40 object-cover rounded-lg">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <h2 class="text-xl font-bold text-white mb-2">{{ $project->title }}</h2>

                <p class="text-gray-300 text-sm mb-4">
                    {{ Str::limit($project->description, 100, '...') }}
                </p>

                <div class="flex justify-between items-center">
                    <a
                        href="{{ route('projects.edit', $project->id) }}"
                        class="text-sm font-medium text-blue-400 hover:underline">
                        Edit
                    </a>
                    <form
                        action="{{ route('projects.destroy', $project->id) }}"
                        method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this project?');">
                        @csrf
                        @method('DELETE')

                        <div class="mb-4">
                            <label for="project_name_confirmation" class="block text-sm font-medium text-gray-300">
                                Type the project name to confirm:
                            </label>
                            <input
                                name="project_name_confirmation"
                                id="project_name_confirmation"
                                class="w-full mt-2 border border-gray-300 rounded-md p-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-red-500"
                                placeholder="Enter '{{ $project->title }}'"
                                required>
                        </div>

                        <button
                            type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg shadow-md">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <p class="text-gray-300">No projects found. Create one now!</p>
            @endforelse
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1, 
            spaceBetween: 10,
            effect: 'fade', 
            autoplay: {
                delay: 5000, 
                disableOnInteraction: false, 
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true, 
        });
    </script>
</x-app-layout>
