<x-layout>
    <x-slot:heading>
       jobs
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>
        this jobs pays {{$job->salary}} per year.
    </p>
    <p class="mt-6">
        <x-button href='/jobs/{{$job->id}}/edit'>Edit</x-button>
    </p>

</x-layout>
