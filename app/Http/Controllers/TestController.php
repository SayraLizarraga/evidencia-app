<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importación los diferentes modelos 
use App\Models\Clients;
use App\Models\User;

class TestController extends Controller
{
    public function index_clients(){
        $page_title= "clients";
        $clients = clients::all();
        return view('clients', compact('page_title' ,'clients'));
        }
            
    public function index_user(){
        $page_title= "User";
        $user = user::all();
        return view('user', compact('page_title','user'));
        }
}
