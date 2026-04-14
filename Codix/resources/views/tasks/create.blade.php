@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
            <input type="text" name="title" 
                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200 focus:border-indigo-500" 
                   required>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" 
                      class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200 focus:border-indigo-500"></textarea>
        </div>
        <div class="flex space-x-3">
            <button type="submit" 
                    class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded">
                Save Task
            </button>
            <a href="{{ route('tasks.index') }}" 
               class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-4 py-2 rounded">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
