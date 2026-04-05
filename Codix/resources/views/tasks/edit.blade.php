@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-medium">Title</label>
            <input type="text" name="title" value="{{ $task->title }}" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-medium">Description</label>
            <textarea name="description" class="w-full border rounded p-2">{{ $task->description }}</textarea>
        </div>
        <div>
            <label class="inline-flex items-center">
                <input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }} class="mr-2">
                Completed
            </label>
        </div>
        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update Task</button>
            <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
        </div>
    </form>
</div>
@endsection
