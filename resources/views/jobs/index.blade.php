<x-layout>
<x-slot name="title"> Browse Jobs</x-slot>
<h1>
     All Jobs
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    @forelse($jobs as $job)
       <x-job-card :job="$job" />
    @empty
    <p>No jobs available</p>
    @endforelse
</div>
</x-layout>