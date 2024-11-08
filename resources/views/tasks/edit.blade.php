<x-layout>
    <x-slot:heading>
        Edit Page
    </x-slot:heading>

    <div class="px-5 py-3 mx-5 my-10 bg-purple-950 rounded-lg ">
        <form action="{{ route('tasks.update' , $task->id) }}" method="post" >
            @csrf
            @method('PUT')
    
            <div class=" flex justify-center ">
                <label for="task_name" class="px-2 py-2 text-lg text-white font-bold">Task Name : </label>
                <input type="text" name="task_name"
                value="{{ old('task_name' , $task->task_name)}}" 
                class="ml-5 px-2 py-3 text-rose-500 font-semibold rounded-lg "
                >
            </div>
            <div class=" flex justify-center ">
                <input type="checkbox" name="is_complete" id="is_complete"
                value="1"
                {{ old('is_complete', $task->is_complete ? 'checked' : '' )}}
                class="form-checkbox w-6 text-green-500"
                >
                <label for="is_complete" class="ml-5 px-2 py-3 text-white font-semibold cursor-pointer " >
                    {{ $task->is_complete ? 'Marked As Complete' : 'Mark As Complete'}} 
                </label>
            
            </div>
            <div class="mt-4 flex justify-center gap-4">
                <div>
                    <button type="submit" class="px-5 py-2 my-5 bg-sky-700 rounded-lg shadow-md text-white font-bold ">Update Task </button>
                </div>
              
                <div class="mt-7 ">
                    <x-back class="bg-sky-700 py-2" >
                        Go Back
                    </x-back>
                </div >
            </div>    
        </form>
    
    </div>

</x-layout>
