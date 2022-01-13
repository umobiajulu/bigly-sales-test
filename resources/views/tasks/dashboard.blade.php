@extends('layout')

@section('content')

    <div class="mt-10">
        <h1 class="text-4xl">Overview</h1>

        <div class="mt-5 text-2xl">
            We're so excited to have your take our coding challenge. This challenge consists of 4 tasks which, if completed successfully, will take you through each task.
        </div>
        <div class="mt-5 text-2xl">
            You have 1 hour to complete this challenge and upload it to github.
        </div>

        <div class="mt-5">
            <a class="bg-blue-500 p-2 rounded text-white" href="{{ route('tasks.show', 1) }}">Begin</a>
        </div>
    </div>

@endsection
