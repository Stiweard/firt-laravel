@extends('app')

@section('content')
<style>
    form{
        width: 50%;
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 1px 1px 1px #ccc;
    }

    div{
        margin-bottom: 10px;
    }
    input{
        width: 100%;
    }
    button{
        width: 100%;
    }
    label{
        margin-bottom: 5px;
    }    
</style>

    <div>
        <form action="{{route('task-update', ['id'=>$task->id])}}" method="POST">
            @csrf

            @if (session('success'))
                <h6>{{ session('success') }}</h6>
            @endif

            @error('title')
                <h6>{{$message}}</h6>
            @enderror

            <div>
                <label for="exampleInputEmail1">Title task</label>
                <input type="text" name="title" placeholder="Task" value="{{ $task->title }}">
                <button type="submit">edit</button>
        </form>
    </div>
    
@endsection
