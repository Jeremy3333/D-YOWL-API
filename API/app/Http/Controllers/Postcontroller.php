<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Intervention\Image\ImageManagerStatic as Image;


class Postcontroller extends Controller
{
    function getposts(){
        $posts = Post::all();
        $array = [];
        foreach($posts as $post) {
            array_push($array,[
                "id" => json_decode($post, true)["id"],
                "title" => json_decode($post, true)["title"],
                "img" => json_decode($post, true)["img"],
            ]);
        }
        return response($array, 200);
    }
    function getpost(Request $request, $id){
        $posts = Post::all();
        foreach($posts as $post) {
            if($id == json_decode($post, true)["id"]){
                $array = $post;
            }
        }
        return response($array, 200);
    }
    function storepost(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->user = $request->user;
        $post->link = $request->link;
        $post->likes = $request->likes;
        $post->shares = $request->shares;
        $post->comment = $request->comment;
        $post->img = $request->img;
        $post->save();
        return response("success", 200);
    }
    function test(Request $request) {
        $file = base64_decode($request->img);
        $folderName = 'public/img/';
        $safeName = time().'.'.'png';
        $destinationPath = public_path() . $folderName;
        $success = file_put_contents(public_path().'/img/'.$safeName, $file);
        print $success;
    }
}
