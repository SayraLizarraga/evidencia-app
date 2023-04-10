<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OrdersDetails;

class OrdersDetailsController extends Controller
{
    //
    public function index_ordersdet(){
        $page_title="Orders Details";
        $ordersdetails = ordersdetails::all();
        return view('ordersdet', compact('page_title','ordersdetails'));
        }

}
