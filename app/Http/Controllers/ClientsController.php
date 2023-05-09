<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importación los diferentes modelos 
use App\Models\Clients;
use App\Models\User;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = user::where('id', Auth::id())
            ->where('active', 1) 
            ->where('role', 5)
            ->select('id','name','email','password','phone','address','tax_id')
            -> get();

        //dd($parents);

        $page_title = "Clients";
        return view('clients.index', compact('parents','page_title'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = "Create Parents";
        return view ('parents.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        parents::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'gender' => $request -> gender,
            'active' => 1,
        ]);

        return redirect()->route('parents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $parents = parents::where('user_id', Auth::id())
            ->where('id', $id)
            ->where('active', 1)
            ->select('id','name')
            -> firstOrFail();

        $page_title="Show Parents";
        return view('clients.show', compact('clients','page_title'));    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
           
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }    
}
