@extends('layouts.base')

@section('content')

<h1>Blog</h1>
<a href="{{ route('blog.create') }}">Create New Post</a>
@foreach ($posts as $post)
    <h2><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
    <p>{{ Str::limit($post->content, 150) }}</p>
@endforeach
{{ $posts->links() }}

@endsection