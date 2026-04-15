@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input type="text" name="title" value="{{ $task->title }}" 
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200 focus:border-indigo-500" 
                   required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" 
                      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200 focus:border-indigo-500">{{ $task->description }}</textarea>
        </div>
        <div class="flex items-center space-x-2">
            <input type="checkbox" name="is_completed" value="1" 
                   class="h-5 w-5 text-indigo-600 border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500"
                   {{ $task->is_completed ? 'checked' : '' }}>
            <label class="text-sm text-gray-700">Completed</label>
        </div>
        <div class="flex space-x-3">
            <button type="submit" 
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-sm">
                Update Task
            </button>
            <a href="{{ route('tasks.index') }}" 
               class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-4 py-2 rounded">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
