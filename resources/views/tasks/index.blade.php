@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 mx-auto">

                <h1 class="text-center">My Tasks</h1>
                <a href=" {{ route('tasks.create') }} " class="btn btn-primary">Create Task</a>
                <ul class="list-group mt-4">

                    @foreach ($tasks as $task)
                        <li class="list-group-item text-center">
                            <h4> {{ $task->title }} ({{ $task->status }}) </h4>
                            <p>Due: {{ $task->due_date }} </p>
                            <a href=" {{ route('tasks.edit', $task->id) }} " class="btn btn-warning">Edit</a>
                            <form action=" {{ route('tasks.destroy', $task->id) }} " method="POST"
                                style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </li>
                    @endforeach

                </ul>

                <div>
                    {{ $tasks->links('pagination::bootstrap-5') }}
                </div>

            </div>

        </div>

    </div>
@endsection
