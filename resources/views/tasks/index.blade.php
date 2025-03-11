<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
    <h1>Tasks List</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>
</body>
</html>
