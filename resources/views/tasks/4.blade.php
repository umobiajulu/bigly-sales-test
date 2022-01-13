@extends('layout')

@section('content')

    <div class="mt-10">
        <h1 class="text-4xl">Task #4</h1>

        <div class="mt-5 text-lg">
            <p>Create a resourceful controller. Once completed click the blue "Next Task" button.</p>
        </div>

        <div class="mt-5">
            <a class="bg-blue-500 p-2 rounded text-white" href="{{ route('tasks.show', 5) }}">Next Task</a>
        </div>
    </div>

@endsection
