<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest()->paginate(10);
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('post'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|string|unique:blog_posts,slug',
        ]);

        BlogPost::create($request->all());

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }

    public function edit($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, $slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'slug' => 'required|string|unique:blog_posts,slug,' . $post->id,
        ]);

        $post->update($request->all());

        return redirect()->route('blog.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        $post->delete();

        return redirect()->route('blog.index')->with('success', 'Blog post deleted successfully.');
    }
}

