<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        // $user = array();

        // for($i=0; $i<5; $i++){
        //     $user = array(
        //         "name" => "user " . ($i+1),
        //         "id" =>"00" . ($i+1)

        //     );
        //     $users[] = (object)$user; 
        // }
        $users = User::all();

        return view('user.userList')->with('users', $users);
    }
    public function userEdit(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        // return $user;
        return view('user.userEdit')->with('user', $user);
        // return view('user.userCreate')->with('user', $user);

    }
    public function userEditSubmitted(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        // return  $student;
        $user->name = $request->name;
        $user->id = $request->id;
        $user->save();
        return redirect()->route('userList');
    }

    public function userDelete(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->delete();

        return redirect()->route('userList');
    }
    public function userCreate()
    {
        return view('user.userCreate');
    }
    public function userCreateSubmitted(Request $request)
    {
        $validate = $request->validate(
            [
                "name" => "required|min:5|max:20",
                "id" => "required",
                'dob' => 'required',
                'email' => 'email',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            ['name.required' => "Please put you name here"]
        );
        $user = new  User();
        $user->name = $request->name;
        $user->id = $request->id;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('userList');
    }
    public function userDash()
    {
        return view('user.userDash');
    }
}
