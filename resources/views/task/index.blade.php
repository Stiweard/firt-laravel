@extends('app')

@section('content')
    <style>
        form {
            width: 50%;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 1px 1px 1px #ccc;
        }

        div {
            margin-bottom: 10px;
        }

        input {
            width: 100%;
        }

        button {
            width: 100%;
        }

        label {
            margin-bottom: 5px;
        }
    </style>

    <div>
        <form action="{{ route('task') }}" method="POST">
            @csrf

            @if (session('success'))
                <h6>{{ session('success') }}</h6>
            @endif

            @error('title')
                <h6>{{ $message }}</h6>
            @enderror

            <div>
                <label for="exampleInputEmail1">New task</label>
                <input type="text" name="title" placeholder="Task">
                <button type="submit">send</button>
        </form>
        <div>
            @if ($tasks->isEmpty())
                <p>No tasks found</p>
            @else
                @foreach ($tasks as $task)
                    <div>
                        <a href="{{ route('task-show', ['id' => $task->id]) }}">{{ $task->title }}</a>
                        <form action="{{ route('task-destroy', $task->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

@endsection
