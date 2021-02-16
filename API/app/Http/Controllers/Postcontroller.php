<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


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
}
