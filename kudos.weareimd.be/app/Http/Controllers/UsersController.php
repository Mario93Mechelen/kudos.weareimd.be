<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        $users = App\User::all();
        return view('users/index', compact('users'));
    }
    
    public function showUser($id){
        $user = App\User::find($id);
        return view('users/user', compact('user'));
    }
}
