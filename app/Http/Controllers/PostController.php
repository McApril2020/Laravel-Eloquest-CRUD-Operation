<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {

        return view('index');

    }

    public function create() {
        $posts = new Post;
        $posts->title = request('title');
        $posts->body = request('body');
        $posts->author = request('author');
        $posts->save();

        return 'Post has been successfully created';
    }

    public function store() {
        $posts = Post::all();
        return view('post', ['posts' => $posts]);


    }

    public function delete($id) {
        Post::where('id', $id)->delete();
        return 'Successfully Deleted!';
    }

    public function update(Request $request) {
        $post = Post::where('id', $request->id)->first();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->author = $request->author;
        $post->save();
        return 'Post has been Updated Successfully';
    }

    public function edit_form($id) {
        $post = Post::where('id', $id)->first();

        return view('edit-post', ['post' => $post]);
    }
}


