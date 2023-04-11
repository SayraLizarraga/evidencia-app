<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //
    public function index_user(){
        $page_title= "User";
        $user = user::all();
        return view('user', compact('page_title','user'));
        }
}
