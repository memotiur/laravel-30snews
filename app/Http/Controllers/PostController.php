<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('pages.post.create')->with('categories', Category::get());
    }

    public function store(Request $request)
    {

         $request->all();
        unset($request['_token']); //Remove Token

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image_name = $date = date('y/m/d/') . $image_name;
            $destinationPath = public_path('/images/post' . $date = date('/y/m/d'));
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = $request['image'];
        }
        $request->request->add(['post_image' => $image_name]);

        //return $request->all();
        try {
            Post::create($request->except('image'));
            return back()->with('success', "Post created");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function show(Post $post)
    {
        $posts = Post::join('categories', 'categories.category_id', '=', 'posts.post_category')
            ->orderBy('posts.created_at', 'DESC')
            ->get();
        return view('pages.post.show')->with('posts', $posts);
    }


    public function edit($id)
    {
        return view('pages.post.edit')
            ->with('post', Post::where('post_id', $id)->first())
            ->with('categories', Category::get());
    }


    public function update(Request $request)
    {
        $post_id=$request['post_id'];
        $temp_image_name=$request['image_name'];
        unset($request['_token']);
        unset($request['post_id']);
        unset($request['image_name']);


        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            ]);
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image_name = $date = date('y/m/d/') . $image_name;
            $destinationPath = public_path('/images/post' . $date = date('/y/m/d'));
            $image->move($destinationPath, $image_name);
        } else {
            $image_name = $temp_image_name;
        }
        $request->request->add(['post_image' => $image_name]);

        try {
            Post::where('post_id',$post_id)->update($request->except('image'),$request->except('post_id'),$request->except('image_name'));
            return back()->with('success', "Post Updated");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            Post::where('post_id', $id)->delete();
            return back()->with('success', "Post Deleted");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }

    public function unpublish($id)
    {
        try {
            Post::where('post_id', $id)->update(['post_publish_status' => 0]);
            return back()->with('success', "Post Deactivated");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }

    public function publish($id)
    {
        try {
            Post::where('post_id', $id)->update(['post_publish_status' => 1]);
            return back()->with('success', "User Activated");
        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
}
