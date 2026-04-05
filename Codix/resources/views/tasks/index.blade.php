@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-2xl font-bold mb-4">Task Manager</h1>
    <a href="{{ route('tasks.create') }}" 
       class="inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded mb-3">
       + Add Task
    </a>

    <div class="overflow-x-auto bg-white shadow rounded">
        <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2 text-left border-r border-gray-300">Title</th>
                    <th class="px-4 py-2 text-left border-r border-gray-300">Description</th>
                    <th class="px-4 py-2 text-left border-r border-gray-300">Status</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                <tr class="border-t hover:bg-gray-50">
                    <td class="px-4 py-2 align-top border-r border-gray-300">{{ $task->title }}</td>
                    <td class="px-4 py-2 align-top border-r border-gray-300">{{ $task->description }}</td>
                    <td class="px-4 py-2 align-top border-r border-gray-300">
                        <span class="px-2 py-1 rounded text-sm 
                            {{ $task->is_completed ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-700' }}">
                            {{ $task->is_completed ? 'Completed' : 'New' }}
                        </span>
                    </td>
                    <td class="px-4 py-2">
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('tasks.show', $task->id) }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">View</a>
                            <a href="{{ route('tasks.edit', $task->id) }}" 
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                        No tasks yet — start by adding one!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
