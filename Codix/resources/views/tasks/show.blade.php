@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Task Details</h1>
    <p><strong>Title:</strong> {{ $task->title }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'New' }}</p>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
