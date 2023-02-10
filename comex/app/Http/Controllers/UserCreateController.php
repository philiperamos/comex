<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserCreateController extends Controller
{
    public function Index(){
        return view('user.create');
    }

    public function Store(Request $request){
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        
        return to_route('login');
    }
}
