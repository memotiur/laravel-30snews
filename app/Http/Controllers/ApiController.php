<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function getAll()
    {
        return $posts = Post::join('categories', 'categories.category_id', '=', 'posts.post_category')
            ->orderBy('posts.created_at', 'DESC')
            ->get();
    }

    public function categoryPost($category_id)
    {
        return $posts = Post::join('categories', 'categories.category_id', '=', 'posts.post_category')
            ->where('categories.category_id', $category_id)
            ->orderBy('posts.created_at', 'DESC')
            ->get();
    }

    public function latestPost($last_id)
    {
        return $posts = Post::join('categories', 'categories.category_id', '=', 'posts.post_category')
            ->where('posts.post_id', '>', $last_id)
            ->orderBy('posts.created_at', 'DESC')
            ->get();
    }
}
