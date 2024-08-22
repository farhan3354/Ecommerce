@extends('layouts.base')


@section('content')
    
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<a href="{{ route('blog.index') }}">Back to Blog</a>

@endsection