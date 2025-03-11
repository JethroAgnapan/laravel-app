<!-- filepath: c:\Users\Jthr\Desktop\laravel-app\resources\views\tasks\show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">{{ $task->title }}</h1>
    <p class="bg-white p-6 rounded shadow-md">{{ $task->description }}</p>

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