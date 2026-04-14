<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Task Manager</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-gray-900 shadow mb-6">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="{{ route('tasks.index') }}" class="text-white font-bold text-lg">
                Task Manager
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4">
        @if(session('success'))
            <div class="mb-4 rounded bg-green-100 text-green-800 px-4 py-2 border border-green-300">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

</body>
</html>
