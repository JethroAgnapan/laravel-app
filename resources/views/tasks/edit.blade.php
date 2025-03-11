<!-- filepath: c:\Users\Jthr\Desktop\laravel-app\resources\views\tasks\edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Title:</label>
            <input type="text" id="title" name="title" value="{{ $task->title }}" required class="w-full p-2 border border-gray-300 rounded mt-1">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description:</label>
            <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded mt-1">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>

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