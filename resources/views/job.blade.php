<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <div class="px-4 py-6 border border-gray-200 rounded-lg">
        <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
        <h2 class="font-bold text-lg">{{ $job->title }}</h2>
        <p>This job pays {{ $job->salary }} per year.</p>

        <!-- Tags -->
        <div class="mt-4">
            @foreach ($job->tags as $tag)
                <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                    {{ $tag->name }}
                </span>
            @endforeach
        </div>
    </div>
</x-layout>
