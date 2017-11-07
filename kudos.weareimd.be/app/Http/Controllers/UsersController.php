<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function home(){
        $user = Auth::user();
        $numCompliments = App\Compliment::all()->where('receiver_id', $user->id)->count();

        return view('users/home', compact('user', 'numCompliments'));
    }
}
