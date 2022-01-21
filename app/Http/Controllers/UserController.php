<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

    }

    public function profile()
    {
        return view('panel.profile');
    }

    public function updateProfile(UpdateUserRequest $request)
    {
        $user = \Auth::user();
        $data = $request->only(['name']);
        if ($request->password){
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        session()->flash('success','User Changed Successfully');
        return view('panel.profile');
    }
}
