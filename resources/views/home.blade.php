
<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <div class="px-5 py-2 container  ">

        {{-- <label for="task" class="ml-5 text-white text-xl ">Task Tracker</label> --}}
        <form action="{{ route('tasks.store') }}" method="post">
            @csrf
            <div>
                <div class="my-5 flex items-center justify-center">
                    <label for="name" class="px-5 py-5 text-white text-lg font-semibold">Task Name :</label>
                    <input type="text" name="task_name" class="px-3 py-1 rounded-lg  mx-5" required>
                </div>
                <div class="my-5 flex items-center justify-center ">
                    <button type="submit" class="px-5 py-2 text-md text-xl text-white font-semibold bg-rose-700 rounded-lg "> Add Task</button>
                </div>
            </div>    
        </form>
    </div>

    <section class="py-5 px-5 flex items-center justify-center ">
        <div class="px-5 py-5 container bg-white rounded-lg shadow-md ">
            <div class="px-5 py-2 bg-pink-700 text-xl text-center text-white rounded-lg shadow-md font-semibold">
                <label for="tasks" >All Tasks</label>
            </div>
            
            <div class="my-5 px-5 py-5 bg-rose-900 text-lg text-white rounded-lg shadow-md " >
               @php  $i=1; @endphp
                    @foreach ($tasks as $task)
                    <div class="flex space-x-5 py-2 ">
                        <div class="w-1/5 ">{{ $i }} </div>
                        <div class="w-1/2 font-semibold "> {{ $task->task_name }} </div>
                        <div class="w-1/5 "> 
                            <form action="{{ route('tasks.updateIsComplete', $task->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <input type="checkbox" name="is_complete" id="is_complete_{{ $task->id}}" class="hidden" 
                                value="1" 
                                {{ old('is_complete', $task->is_complete ? 'checked' : '') }} 
                                onchange="this.form.submit()"
                                >

                                <label for="is_complete_{{ $task->id}}" class="cursor:pointer" >
                                    {{ $task->is_complete ? 'Done' : 'Not Done' }}
                                </label>
                            
                            </form>
                        </div>
                        
                        <div class="w-1/5 " >
                            <a href=" {{ route('tasks.edit', $task->id) }} " class=""> Edit</a>
                        </div>
                        <div  class="w-1/5 " >
                            <form action="{{ route('tasks.destroy', $task->id ) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" >Delete</button>
                            </form>
                        </div>    

                    </div>
                    @php  $i++; @endphp
                    @endforeach
            </div>

        </div>
    </section>

</x-layout>
