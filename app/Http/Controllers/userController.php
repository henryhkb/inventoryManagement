<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    public function addUser(Request $request)
    {
        $addUser = $request->validate([
            "name"=> 'required',
            "username"=> 'required',
            "password" => 'required',
            "phonenumber" => 'required|unique:users,phonenumber',
            "usertype" => 'required',
            "userStation" => 'required'
        ]);

        $addUser = new User;
        $addUser->name = $request->name;
        $addUser->username = $request->username;
        $addUser->password = Hash::make($request->password);
        $addUser->phonenumber = $request->phonenumber;
        $addUser->usertype = $request->usertype;
        $addUser->userStation = $request->userStation;

        $addUser->save();

        return redirect()->back();
    }

    public function userList(){
        $users = User::all();
        return view('people.userList', compact('users'));
    }

    public function updateUser($id){
        $user = User::find($id);
        return view('people.updateUser', compact('user'));
    }

    public function updateUserConfirmed(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);   
        $user->phonenumber = $request->phonenumber;
        $user->usertype = $request->usertype;
        $user->userStation = $request->userStation;

        $user->save();

        return redirect()->back();

    }


    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->back();

    }

    
}
