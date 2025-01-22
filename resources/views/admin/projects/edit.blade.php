<x-app-layout>
    <div class="max-w-4xl mx-auto mt-12 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-white mb-6">Edit Project</h1>

        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-300">Title</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="mt-1 block w-full bg-gray-700 text-white rounded-lg border border-gray-600 focus:ring-orange-500 focus:border-orange-500 shadow-sm"
                    value="{{ old('title', $project->title) }}"
                    required>
                @error('title')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                <textarea
                    name="description"
                    id="description"
                    rows="5"
                    class="mt-1 block w-full bg-gray-700 text-white rounded-lg border border-gray-600 focus:ring-orange-500 focus:border-orange-500 shadow-sm"
                    required>{{ old('description', $project->description) }}</textarea>
                @error('description')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tags" class="block text-lg font-medium text-gray-700">Tags</label>
                <select
                    name="tags[]"
                    id="tags"
                    class="w-full mt-2 border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    multiple
                    required>
                    @foreach($tags as $tag)
                    <option
                        value="{{ $tag->id }}"
                        {{ isset($project) && $project->tags->contains($tag->id) ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                    @endforeach
                </select>
                @error('tags')
                <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                @enderror
            </div>


            <!-- Image -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-300">Image</label>
                <input
                    type="file"
                    name="image"
                    id="image"
                    class="mt-1 block w-full bg-gray-700 text-white rounded-lg border border-gray-600 focus:ring-orange-500 focus:border-orange-500 shadow-sm">
                @if($project->image_path)
                <p class="mt-4 text-gray-300">Current Image:</p>
                <img
                    src="{{ asset('storage/' . $project->image_path) }}"
                    alt="Project Image"
                    class="mt-2 rounded-md shadow-md max-w-sm">
                @endif
                @error('image')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2">
                Update
            </button>
        </form>
    </div>
</x-app-layout>