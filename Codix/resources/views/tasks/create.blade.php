@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block font-medium">Title</label>
            <input type="text" name="title" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-medium">Description</label>
            <textarea name="description" class="w-full border rounded p-2"></textarea>
        </div>
        <div class="flex space-x-2">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Save Task</button>
            <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
        </div>
    </form>
</div>
@endsection
