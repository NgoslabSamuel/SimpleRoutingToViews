@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Task Manager</h1>
    <a href="{{ route('tasks.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Add Task</a>
    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border p-2">Title</th>
                <th class="border p-2">Description</th>
                <th class="border p-2">Status</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td class="border p-2">{{ $task->title }}</td>
                <td class="border p-2">{{ $task->description }}</td>
                <td class="border p-2">{{ $task->is_completed ? 'Completed' : 'New' }}</td>
                <td class="border p-2 space-x-2">
                    <a href="{{ route('tasks.show', $task->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">View</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
