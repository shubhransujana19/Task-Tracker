<x-layout>
    <x-slot:heading>
        Job 
    </x-slot:heading>
    <div class="max-w-md mx-auto px-5 py-5 bg-white text-lg text-semibold ">
        <h2> {{ $job['title'] }} </h2>
        <p> {{ $job['salary'] }} - per month </p>

        <div class=" mt-10 flex justify-end ">
            <x-back class="bg-violet-500" >
                Go Back
            </x-back>
        </div >

    </div>

</x-layout>