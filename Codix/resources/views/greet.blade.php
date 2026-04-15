<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen font-sans">

    <div class="bg-white shadow-lg rounded-xl p-8 text-center max-w-md">
        
        <h1 class="text-3xl font-bold text-indigo-700 mb-4">Hello from Blade View!</h1> 
        <p class="text-gray-600 mb-6">This is my greet page — the starting point of your app.</p>
        <p class="text-gray-500 mb-3">Click below to see your tasks:</p>
        <a href="{{ route('tasks.index') }}" 
           class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-sm">
            Go to Tasks
        </a>
    </div>

</body>
</html>
