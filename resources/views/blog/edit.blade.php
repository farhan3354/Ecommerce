@extends('layouts.base')

@section('content')

<h1>Edit Blog Post</h1>
<form action="{{ route('blog.update', $post->slug) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}" required>
    <br>
    <label for="slug">Slug:</label>
    <input type="text" name="slug" id="slug" value="{{ $post->slug }}" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" rows="10" required>{{ $post->content }}</textarea>
    <br>
    <button type="submit">Update Post</button>
</form>
<a href="{{ route('blog.index') }}">Back to Blog</a>
    
@endsection