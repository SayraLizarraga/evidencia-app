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
        $page_title= "Orders";
        $orders = orders::all();
        return view('orders', compact('page_title','orders'));
        }

    public function index_ordersdet(){
        $page_title="Orders Details";
        $ordersdetails = ordersdetails::all();
        return view('ordersdet', compact('page_title','ordersdetails'));
        }

    public function index_products(){
        $page_title= "Products";
        $products = products::all();
        return view('products', compact('page_title','products'));
        }
      
    public function index_staff(){
        $page_title= "Staff";
        $staff = staff::all();
        return view('staff', compact('page_title','staff'));
        }
    
    public function index_user(){
        $page_title= "User";
        $user = user::all();
        return view('user', compact('page_title','user'));
        }
}
