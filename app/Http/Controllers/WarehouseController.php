<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Auth;

use App\Models\clients;
use App\Models\orders;
use App\Models\ordersdetails;
use App\Models\products;
use App\Models\requests;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "View Orders";
        $orders = orders::all();

        return view('warehouse.index', compact('page_title','orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Create a Request";
        $products = products::where('active',1)->get();

        return view('warehouse.create', compact('page_title','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        requests::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'status' => $request->status
        ]);

        return redirect()->route('warehouse.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = "Show Order";
        $orders = orders::where('id',$id)->firstOrFail();

        return view('warehouse.show', compact('page_title','orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = "Edit Order";
        $order = orders::where('id',$id)->firstOrFail();

        return view('warehouse.edit', compact('page_title','order'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = orders::where('id',$id)->firstOrFail();

        $order->update([
            'status' => $request->status
        ]);

        return redirect()->route('warehouse.show', $id);
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
