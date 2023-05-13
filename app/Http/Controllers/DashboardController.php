<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\clients;
use App\Models\orders;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch(Auth::user()->role){
            case 0:
                $page_title="You are an admin";
                return view('dashboard', compact('page_title'));
                break;
            case 1:
                $page_title="You are in the sales department";
                return view('sales.index', compact('page_title'));
                break;
            case 2:
                $page_title="You are in the warehouse department";
                return view('warehouse.index', compact('page_title'));
                break;
            case 3:
                $page_title="You are in the purchaisiing department";
                return view('purchaising.index', compact('page_title'));
                break;
            case 4:
                $page_title="You are in the route department";
                return view('route.index', compact('page_title'));
                break;    
        }
    }

    public function list(Request $request){
        $page_title="Orders";
        $client = clients::where('uuid', $request->uuid)->firstOrFail();
        $orders = orders::where('customer_id', $client->id)->get();

        return view('clientorders', compact('orders','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
