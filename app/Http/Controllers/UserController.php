<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (auth()->user()->role == 'user') {
            return view('home');
        }
    }
        public function allUsers():Response
    {
           $users = User::orderBy('created_at','DESC')->paginate(10);
        return response()->view('admin.users.index',compact('users'));
    }
}
