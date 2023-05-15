<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\clients;
use App\Models\orders;
use App\Models\ordersdetails;
use App\Models\products;
use App\Models\requests;

class PurchaisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "View Request";
        $requests = requests::where('status',0)->get();

        return view('purchaising.index', compact('page_title','requests'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = "Request";
        $requests = requests::where('status',0)->get();

        return view('purchaising.create', compact('page_title','requests'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests $requests)
    {
        requests::create([
            'product_id' => $requests->product_id,
            'quantity' => $requests->quantity,
            'status' => $requests->status
        ]);

        return redirect()->route('purchaising.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = "Show Requests";
        $requests = requests::where('id',$id)->firstOrFail();

        return view('purchaising.show', compact('page_title','requests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = "Edit Requests";
        $requests = requests::where('id',$id)->firstOrFail();

        return view('purchaising.edit', compact('page_title','requests'));
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
        $requests = requests::where('id',$id)->firstOrFail();

        $requests->update([
            'status' => $request->status
        ]);

        return redirect()->route('purchaising.show', $id);
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
