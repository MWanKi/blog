@extends('layouts.blog')

@section('title')
@endsection

@section('content')

    <ul>
        @foreach($posts as $post)
            <li> 
                <h2>{{ $post->title }} </h2>
                <div>
                    {{ $post->body }}
                </div>
            </li>
        @endforeach
    </ul>
    <a href="{{ url('posts/create') }}">글쓰기</a>

@endsection