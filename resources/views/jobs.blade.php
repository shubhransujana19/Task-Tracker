<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    <div class="max-w-md mx-auto container px-5 py-5 bg-white ">
        <ul>
            @foreach($jobs as $job)
            <a href="jobs/{{ $job['id'] }}">
                <li class="text-blue-700 text-lg font-semibold hover:underline "> 
                    <strong> {{ $job['title'] }} </strong> : Pays  {{ $job['salary'] }} Per Month 
                </li>
            </a>
            @endforeach
    
        </ul>
    </div>

</x-layout>