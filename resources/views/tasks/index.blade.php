<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tasks</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-500 ">
    <div class="m-5 px-5 py-2 text-white ">
        <h1>All Tasks</h1>
        <a href="{{ route('tasks.create') }}">Add New Task</a>
        
        <ul >
            @foreach ($tasks as $task)
                <li>
                    {{ $task->task_name }}
                    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                    
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    
    </div>
</body>
</html>
