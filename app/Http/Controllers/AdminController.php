<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::with('role')->get();
        // return view('admin.dashboard', compact('users'));
        return view('admin',compact('users'));
    }
}
