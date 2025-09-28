<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                       class="border rounded px-3 py-2 w-full" required>
                @error('title')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input type="text" name="salary" id="salary" value="{{ old('salary') }}"
                       class="border rounded px-3 py-2 w-full" required>
                @error('salary')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-6 flex justify-end gap-x-4">
            <a href="/jobs" class="text-gray-600">Cancel</a>
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">
                Save
            </button>
        </div>
    </form>
</x-layout>
