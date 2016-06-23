@extends('layouts.blog')

@section('title')
@endsection

@section('content')

<form action="{{ url('posts') }}" method="post">
    {{ csrf_field() }}
    <div>
        <label for="post-title">제목:</label>
        <input type="text" name="title" id="post-title">
    </div>
    <div>
        <label for="post-body">내용:</label>
        <textarea name="body" id="post-body" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit">글 올리기</button>
        <a href="{{ url('posts') }}">취소</a>
    </div>
</form>

@endsection