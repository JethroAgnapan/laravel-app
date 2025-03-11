<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">Tasks List</h1>
    <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Task</a>
    <ul class="bg-white p-6 rounded shadow-md">
        @foreach ($tasks as $task)
            <li class="mb-2">{{ $task->title }}</li>
        @endforeach
    </ul>

    <div class="mt-6">
        <h2 class="text-xl font-semibold mb-2">Navigation</h2>
        <a href="{{ route('tasks.index') }}" class="inline-block mb-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded">View All Tasks</button>
        </a>
        <!-- Assuming you have a task with ID 1 for demonstration purposes -->
        <a href="{{ route('tasks.show', 1) }}" class="inline-block mb-2">
            <button class="bg-yellow-500 text-white px-4 py-2 rounded">View Task Details</button>
        </a>
        <a href="{{ route('tasks.edit', 1) }}" class="inline-block mb-2">
            <button class="bg-purple-500 text-white px-4 py-2 rounded">Edit Task</button>
        </a>
    </div>
</body>
</html>
