<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{	
    public function index()
    {
    	$posts = Post::all();

    	return view('admin.posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);

        $post = Post::create( $request->only('title') );

        return redirect()->route('admin.posts.edit', $post);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.posts.edit', compact('categories', 'tags', 'post'));
    }

    public function update(Post $post, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body'  => 'required',
            'category' => 'required',
            'tags' => 'required',
            'excerpt' => 'required'
        ]);

        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->iframe = $request->get('iframe');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = $request->has('published_at') 
                                ? Carbon::parse($request->get('published_at')) 
                                : null;

        $post->category_id = Category::find($cat = $request->get('category'))
                                ? $cat
                                : Category::create(['name' => $cat])->id;
        $post->save();

        $tags = [];

        foreach ($request->get('tags') as $tag) 
        {
            $tags[] = Tag::find($tag)
                        ? $tag
                        : Tag::create(['name' => $tag])->id;
        }
        
        $post->tags()->sync($tags);

        return redirect()->route('admin.posts.edit', $post)->with('flash', 'Tu publicación ha sido guardada');
    }
}








