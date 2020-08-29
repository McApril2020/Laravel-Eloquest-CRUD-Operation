<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function addPost() {

        return view('add-post');

    }

    public function createPost(Request $request) {
        $posts = new Post;
        $posts->title = request('title');
        $posts->body = request('body');
        $posts->save();

        return 'Post has been successfully created';
    }

    public function showPost() {
        $posts = Post::all();
        return view('post', ['posts' => $posts]);


    }

    public function deletePost($id) {
        Post::where('id', $id)->delete();
        return 'Successfully Deleted!';
    }

    public function updatePost(Request $request) {
        $post = Post::where('id', $request->id)->first();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return 'Post has been Updated Successfully';
    }

    public function updatedPost($id) {
        $post = Post::where('id', $id)->first();

        return view('edit-post', ['post' => $post]);
    }
}


