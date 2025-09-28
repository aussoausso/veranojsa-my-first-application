<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <p><strong>Salary:</strong> {{ $job->salary }}</p>
    <p><strong>Employer:</strong> {{ $job->employer->name ?? 'N/A' }}</p>

    <a href="/jobs/{{ $job->id }}/edit" class="text-blue-500">Edit Job</a>
</x-layout>
