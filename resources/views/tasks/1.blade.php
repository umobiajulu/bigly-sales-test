@extends('layout')

@section('content')

    <div class="mt-10">
        <h1 class="text-4xl">Task #1</h1>

        <div class="mt-5 text-lg">
            In this task we would like to see your knowledge about Laravel's IoC container. When you click the "Begin Task" button you will encounter a "Illuminate\Contracts\Container\BindingResolutionException" error. If properly corrected you will be redirected to Task #2.
        </div>

        <div class="mt-5">
            <a class="bg-blue-500 p-2 rounded text-white" href="{{ url('taskone') }}">Begin Task</a>
        </div>
    </div>

@endsection
