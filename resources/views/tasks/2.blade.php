@extends('layout')

@section('content')

    @if(collect(Artisan::all())->keys()->search('tasks:2'))
        <script>window.location = "{{ route('tasks.show', 3) }}";</script>
    @endif

    <div class="mt-10">
        <h1 class="text-4xl">Task #2</h1>

        <div class="mt-5 text-lg">
            <p>Using an artisan command create a command which has the signature "tasks:2"</p>
            <p>Once done click the blue "Next Task"</p>
        </div>

        <div class="mt-5">
            <a class="bg-blue-500 p-2 rounded text-white" href="{{ route('tasks.show', 2) }}">Next Task</a>
        </div>
    </div>

@endsection
