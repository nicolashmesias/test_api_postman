<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:225',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create($request->all());

        return response($user, 200);
    }
}
