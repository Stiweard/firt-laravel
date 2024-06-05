@extends('app')



@section('content')

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    @if (session('success'))
        <h6>{{ session('success') }}</h6>
    @endif

    @error('name')
        <h6>{{ $message }}</h6>
    @enderror

    <div>
        <label for="exampleInputEmail1">New task</label>
        <input type="text" name="name" placeholder="name">
        <input type="color" name="color" placeholder="color">
        <button type="submit">send</button>
</form>

@endsection