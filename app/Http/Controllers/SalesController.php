<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\clients;
use App\Models\orders;
use App\Models\ordersdetails;
use App\Models\products;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Create Order";
        $clients = clients::where('active',1)->get();
        $products = products::where('active',1)->get();

        return view('sales.create', compact('page_title','clients','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = orders::create([
            'status' => 0,
            'client_id' => $request->client_id,
            'tax' => 0,
            'total' => 0,
            'subtotal' => 0,
        ]);

        $quantities = $request->quantities;
        $products = $request->products;
        $order_subtotal = 0;

        for($x=0; $x < count($products); $x++){
            $product = products::where('id', $products[$x])->first();
            $subtotal = $product->price * $quantities[$x];

            orderdetails::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'quantity' => $quantities[$x],
                'subtotal' => $subtotal
            ]);

            $order_subtotal = $order_subtotal + $subtotal;
        }

        $order_tax = $order_subtotal * .16;
        $order_total = $order_subtotal + $order_tax;

        $order->update([
            'subtotal'  => $order_subtotal,
            'tax' => $order_tax,
            'total' => $order_total
        ]);

        return redirect()->route('dashboard')->with('page_title', 'Orders');
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
