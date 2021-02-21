<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    function get(){
        $users = Users::all();
        $array = [];
        foreach($users as $user) {
            array_push($array,[
                "id" => json_decode($user, true)["id"],
                "username" => json_decode($user, true)["username"],
                "email" => json_decode($user, true)["email"],
                "pdp" => json_decode($user, true)["pdp"],
            ]);
        }
        return response($array, 200);
    }
    function getuser(Request $request, $id){
        $users = Users::all();
        foreach($users as $user) {
            if($id == json_decode($user, true)["id"]){
                $array = $user;
            }
        }
        return response($array, 200);
    }
    function storeuser(Request $request) {
        $file = base64_decode($request->pdp);
        $folderName = 'public/img/';
        $safeName = time().'.'.'png';
        $destinationPath = public_path() . $folderName;
        $success = file_put_contents(public_path().'/img/'.$safeName, $file);
        $local = "http://localhost:8000/img/$safeName";
        print $success;
        $user = new Users();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->pdp = $local;
        $user->save();
        return response("success", 200);
    }
}
