<x-app-layout>
    <div class="max-w-4xl mx-auto mt-12 bg-gray-800 p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-white mb-6">Create Project</h1>

        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-gray-300">Title</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    class="mt-1 block w-full bg-gray-700 text-white rounded-lg border {{ $errors->has('title') ? 'border-red-500' : 'border-gray-600' }} focus:ring-orange-500 focus:border-orange-500 shadow-sm"
                    value="{{ old('title') }}"
                    required>
                @error('title')
                <div class="mt-2 flex items-center text-sm text-red-500 bg-red-800 bg-opacity-25 p-2 rounded-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01m-6.938 4h13.856C18.063 21 19 20.063 19 18.938V5.062C19 3.937 18.063 3 16.938 3H7.062C5.937 3 5 3.937 5 5.062v13.876C5 20.063 5.937 21 7.062 21z"></path>
                    </svg>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                <textarea
                    name="description"
                    id="description"
                    rows="5"
                    class="mt-1 block w-full bg-gray-700 text-white rounded-lg border {{ $errors->has('description') ? 'border-red-500' : 'border-gray-600' }} focus:ring-orange-500 focus:border-orange-500 shadow-sm"
                    required>{{ old('description') }}</textarea>
                @error('description')
                <div class="mt-2 flex items-center text-sm text-red-500 bg-red-800 bg-opacity-25 p-2 rounded-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01m-6.938 4h13.856C18.063 21 19 20.063 19 18.938V5.062C19 3.937 18.063 3 16.938 3H7.062C5.937 3 5 3.937 5 5.062v13.876C5 20.063 5.937 21 7.062 21z"></path>
                    </svg>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <label for="tags" class="block text-lg font-medium text-gray-300">Tags</label>
                <select
                    name="tags[]"
                    id="tags"
                    class="w-full mt-2 border {{ $errors->has('tags') ? 'border-red-500' : 'border-gray-600' }} bg-gray-700 text-white rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-orange-500"
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
                <div class="mt-2 flex items-center text-sm text-red-500 bg-red-800 bg-opacity-25 p-2 rounded-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01m-6.938 4h13.856C18.063 21 19 20.063 19 18.938V5.062C19 3.937 18.063 3 16.938 3H7.062C5.937 3 5 3.937 5 5.062v13.876C5 20.063 5.937 21 7.062 21z"></path>
                    </svg>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <label for="images" class="block text-sm font-medium text-gray-300">Images</label>
                <input
                    type="file"
                    name="images[]"
                    id="images"
                    multiple
                    class="mt-1 block w-full bg-gray-700 text-white rounded-lg border {{ $errors->has('images') ? 'border-red-500' : 'border-gray-600' }} focus:ring-orange-500 focus:border-orange-500 shadow-sm">
                @error('images.*')
                <div class="mt-2 flex items-center text-sm text-red-500 bg-red-800 bg-opacity-25 p-2 rounded-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01m-6.938 4h13.856C18.063 21 19 20.063 19 18.938V5.062C19 3.937 18.063 3 16.938 3H7.062C5.937 3 5 3.937 5 5.062v13.876C5 20.063 5.937 21 7.062 21z"></path>
                    </svg>
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-orange-400 focus:ring-offset-2">
                Create
            </button>
        </form>
    </div>
</x-app-layout>
