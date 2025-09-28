<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <ul class="space-y-6">
        @foreach ($jobs as $job)
            <li class="border border-gray-200 rounded-lg p-4">
                <a href="/jobs/{{ $job['id'] }}" class="block">
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $job->employer->name }}
                    </div>
                    <div>
                        <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                    </div>
                </a>

                <!-- Tags -->
                <div class="mt-3">
                    @foreach ($job->tags as $tag)
                        <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                            {{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
