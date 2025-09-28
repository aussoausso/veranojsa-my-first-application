<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <a href="/jobs/create" class="text-blue-500">+ Create Job</a>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}" class="text-indigo-600">
                    {{ $job->title }} – {{ $job->salary }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $jobs->links() }}
</x-layout>
    