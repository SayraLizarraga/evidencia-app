<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importación los diferentes modelos 
use App\Models\Clients;
use App\Models\Orders;
use App\Models\OrdersDetails;
use App\Models\Products;
use App\Models\Staff;
use App\Models\User;

class TestController extends Controller
{
    public function index_clients(){
        $page_title= "clients";
        $clients = clients::all();
        return view('clients', compact('page_title' ,'clients'));
        }
  
    public function index_orders(){
        $orders = orders::all();
        return view('orders', compact('orders'));
        }

    public function index_ordersdet(){
        $ordersdetails = ordersdetails::all();
        return view('ordersdet', compact('ordersdetails'));
        }

    public function index_products(){
        $products = products::all();
        return view('products', compact('products'));
        }
      
    public function index_staff(){
        $staff = staff::all();
        return view('staff', compact('staff'));
        }
    
    public function index_user(){
        $user = user::all();
        return view('user', compact('user'));
        }
}
