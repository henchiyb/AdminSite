<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Product;
use App\Models\User;

class UserController extends Controller
{
    public function show($id){
        $user = User::find(1);
        $new_user = new Product;
        $new_user->name = 'test';
        $new_user->user_id = 1; 
        $new_user->save();
        // $user = Auth::user();
        // dd($user);
        return view('users.show', compact('user'));
    }
    
    public function index(Request $request){
        // $users = DB::table('users')->get();
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
