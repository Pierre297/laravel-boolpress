@extends('layouts.main-layout')
@section('content')

    <a class="btn btn-primary" href="{{ route('post.create') }}">CREATE NEW POST</a>
    
    <table>
        <tr>
            <th>Title</th>
            <th>Text</th>
            <th>Like</th>
            <th>Category</th>
            <th>Data</th>
        </tr>
        @foreach ($posts as $post)

            <tr>
                <td>{{ $post -> title }}</td>
                <td>{{ $post -> text }}</td>
                <td>{{ $post -> likes }}</td>
                <td>{{ $post -> category -> name }} </td>
                <td>{{ $post -> created_at }}</td>
            </tr>
            
        @endforeach  
        
    </table>

@endsection