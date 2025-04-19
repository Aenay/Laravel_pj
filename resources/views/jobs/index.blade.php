<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div class='space-y-4'>
        @foreach ($jobs as $job)

            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-grey-200">

                <div class="font-bold text-blue-400 text-sm">{{ $job->employer->name}}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.

                </div>
            </a>



        @endforeach
    </div>
    <div class="mt-4">
        {{ $jobs->links() }}

</x-layout>
