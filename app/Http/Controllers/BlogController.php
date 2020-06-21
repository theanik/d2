<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
class BlogController extends Controller
{
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(12);
        // dd($posts);
        return view('frontEnd.pages.blog', [
            'posts' => $posts,
        ]);
    }

    public function show ($slug)
    {
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        return view('frontEnd.pages.blog_show', [
            'post' => $post
        ]);
    }

}
