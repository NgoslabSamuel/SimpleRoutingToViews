@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Task Details</h1>

    <div class="space-y-3">
        <p>
            <span class="font-semibold text-gray-700">Title:</span> 
            <span class="text-gray-900">{{ $task->title }}</span>
        </p>
        <p>
            <span class="font-semibold text-gray-700">Description:</span> 
            <span class="text-gray-600">{{ $task->description }}</span>
        </p>
        <p>
            <span class="font-semibold text-gray-700">Status:</span> 
            <span class="{{ $task->is_completed ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }} px-2 py-1 rounded text-sm font-medium">
                {{ $task->is_completed ? 'Completed' : 'New' }}
            </span>
        </p>
    </div>

    <div class="mt-6">
        <a href="{{ route('tasks.index') }}" 
           class="bg-gray-500 hover:bg-gray-600 text-white font-semibold px-4 py-2 rounded">
            Back
        </a>
    </div>
</div>
@endsection
