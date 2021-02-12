<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class Postcontroller extends Controller
{
    function getpost(){
        $post = Post::all();
        return response($post, 200);
    }
}
