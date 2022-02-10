@extends('layouts.main-layout')
@section('content')

    <form action="{{ route('post.store') }}" method="POST">
        
        @method('POST')
        @csrf

        <label for="title">Title</label><br>
        <input type="text" name="title"><br>

        <label for="text">Text</label><br>
        <textarea name="text" cols="30" rows="10"></textarea><br>
        <label for="category">Category</label>
        <select class="mb-3" name="category">
            @foreach ($categories as $category)

            <option value="{{ $category -> id }}">{{ $category -> name }}</option>
                
            @endforeach
        </select>

        <input type="submit" value="CREATE">

    </form>

    
@endsection