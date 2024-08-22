@extends('layouts.base')

@section('content')

<h1>Create Blog Post</h1>
<form action="{{ route('blog.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="slug">Slug:</label>
    <input type="text" name="slug" id="slug" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" rows="10" required></textarea>
    <br>
    <button type="submit">Create Post</button>
</form>
<a href="{{ route('blog.index') }}">Back to Blog</a>
    
@endsection