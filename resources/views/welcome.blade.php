@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron bg-light p-5 rounded-lg mt-3">
        <h1 class="display-4">Welcome to TaskMaster!</h1>
        <p class="lead">
            Manage your tasks efficiently with TaskMaster. Keep track of your to-dos, update task statuses, and set deadlines to boost your productivity!
        </p>

        @auth
        <hr class="my-4">
        <h3>Hello, {{ Auth::user()->name }}!</h3>
        <p>You can view your tasks by clicking the button below:</p>
        <a class="btn btn-primary btn-lg" href="{{ route('tasks.index') }}" role="button">View My Tasks</a>
        @else
        <hr class="my-4">
        <p>Sign up or log in to start managing your tasks:</p>
        <a class="btn btn-success btn-lg" href="{{ route('register') }}" role="button">Get Started</a>
        <a class="btn btn-secondary btn-lg" href="{{ route('login') }}" role="button">Login</a>
        @endauth
    </div>

    @auth
    <!-- Display task stats for authenticated users -->
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Pending Tasks</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $pendingTasks ?? 0 }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">In Progress</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $inProgressTasks ?? 0 }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Completed Tasks</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $completedTasks ?? 0 }}</h5>
                </div>
            </div>
        </div>
    </div>
    @endauth
</div>
@endsection
