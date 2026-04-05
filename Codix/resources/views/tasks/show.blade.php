@extends('layouts.app')

@section('content')
<div class="bg-white shadow-md rounded p-6">
    <h1 class="text-2xl font-bold mb-4">Task Details</h1>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'New' }}</p>
    <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded mt-4 inline-block">Back</a>
</div>
@endsection
