@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Edit Task</h1>

        <div class="row">
            <div class="col-md-8 mx-auto">

                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $task->title) }}"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description', $task->description) }}</textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="in-progress" {{ $task->status == 'in-progress' ? 'selected' : '' }}>In Progress
                            </option>
                            <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed
                            </option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="due_date">Due Date</label>
                        <input type="date" name="due_date" class="form-control"
                            value="{{ old('due_date', $task->due_date) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Task</button>
                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
                </form>


            </div>
        </div>



    </div>
@endsection
