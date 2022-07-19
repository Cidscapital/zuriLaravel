<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
    // show all users method and select all from mysql database table users
    
    function showusers()
    { 
        $user = User::all();
        return view('Users', ['Users' => $user]);
    }

    // create user method and insert into mysql database table users
    function adduser(Request $request)
    {
        $user = new User;
        $user->Name = $request->Name;
        $user->Email = $request->Email;
        $user->phone = $request->phone;
        $user->save();

        $request->session()->put('success', 'User added successfully');
        return redirect('/showusers');
    }


    // delete user method and delete from mysql database table users
    function deleteuser($id)
    {
        DB::table('users')->where('Id',$id)->delete();
        Session()->put('success', 'User deleted successfully');
        return redirect('/showusers');
    }
    // edit user method and select from mysql database table users
    function edituser($id)
    {
        //return $id;
        $user = User::find($id);
        return view("EditUser",['user'=>$user]);
    }
    // update user method and update into mysql database table users
     function updateuser(request $request, $id)
     {
          
          $Name = $request->input('Name');
          $Email = $request->input('Email');
          $phone = $request->input('phone');
          $data=array('Name'=>$Name,"Email"=>$Email,"phone"=>$phone);
          DB::table('users')->where('Id',$id)->update($data);
         return redirect('/showusers');
     }
    
}
