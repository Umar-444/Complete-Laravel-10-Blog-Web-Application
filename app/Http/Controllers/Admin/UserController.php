<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){

    $users= User :: all();
    return view('admin.users.index',compact('users'));

   }

   public function edit($user_id){

        $users = User::find($user_id);
        return view('admin.users.edit',compact('users'));

   }

   public function update(Request $request,$user_id ){


    $users = User::find($user_id);

        $users->role_as=$request->role_as;
        $users->update();
        return redirect('admin/user')->with('massage','updated successful');





   }

}
