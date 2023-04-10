<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Orders;

class OrdersController extends Controller
{
    //
    public function index_orders(){
        $page_title= "Orders";
        $orders = orders::all();
        return view('orders', compact('page_title','orders'));
        }
}
