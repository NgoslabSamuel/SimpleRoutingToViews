@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Manage Tasks</h1>

    <a href="{{ route('tasks.create') }}" 
       class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded mb-4">
       + Add Task
    </a>

    <div class="overflow-x-auto bg-white shadow-lg rounded-xl border boder-gray-100">
        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Title</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Description</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Status</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr class="hover:bg-gray-50 odd:bg-gray-50 even:bg-white">
                    <td class="px-4 py-2 border-b text-gray-800">{{ $task->title }}</td>
                    <td class="px-4 py-2 border-b text-gray-600">{{ $task->description }}</td>
                    <td class="px-4 py-2 border-b">
                        <span class="{{ $task->is_completed ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }} px-2 py-1 rounded text-xs font-semibold uppercase tracking-wide">
                            {{ $task->is_completed ? 'Completed' : 'New' }}
                        </span>
                    </td>
                    <td class="px-4 py-2 border-b space-x-2">
                        <a href="{{ route('tasks.show', $task->id) }}" 
                           class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">View</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" 
                           class="bg-indigo-500 hover:bg-indigo-600 text-white px-3 py-1 rounded text-sm">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
