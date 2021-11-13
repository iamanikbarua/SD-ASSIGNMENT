<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
class UserController extends Controller
{
    //key value pair
   public function users(){
       $users = DB::table('users')->get();
       return response()->json([
         'data'=> $users,
         'message'=> $users ?'Users Retrieved': 'No user found'
       ]);
   } //
   public function getUserById($id) {
       $user = DB::table('users')
       ->where('id','=',$id)
       ->first();
    return response()->json([
         'data' => $user,
         'message' => 'User Info Received'

  
    ]);
   }

   public function storeUser(Request $req){
        $obj = new User();
        $obj ->name = $req->name;
        $obj ->email = $req->email; 
        $obj ->password = $req->password;
        $obj ->role = $req->role;
        
        if($obj->save()){
            return response()->json([
                'data' => $obj,
                'message' => 'Sucessfully Inserted'
       
       
            ]);

        }

   }
}
