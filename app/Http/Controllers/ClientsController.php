<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importación los diferentes modelos 
use App\Models\Clients;
use App\Models\User;

class ClientsController extends Controller
{
    public function index(){
        $page_title= "clients";
        $clients = clients::all();
        return view('clients.index', compact('page_title' ,'clients'));
        }
        
}
