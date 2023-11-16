<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller{
    
    public function showMyPage (){
        $authUser = auth()->user();
        return view('users.userShow')->with([
            'authUser' => $authUser
        ]);
    }
}
