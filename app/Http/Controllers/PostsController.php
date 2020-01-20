<?php


namespace App\Http\Controllers;


use App\Post;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    public function show($slug)
    {
//        $posts = [
//            'first' => 'HEllo!',
//            'second' => 'Better'
//        ];

        //$post = DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstOrFails();

//        dd($post);

//        if (!array_key_exists($post, $posts)) {
//            abort(404, 'Sorry, post not found!');
//        }

        return view('post',
            [
                'post' => $post
            ]);
    }
}
