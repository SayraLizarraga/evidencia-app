<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Staff;

class StaffController extends Controller
{
    //

    public function index_staff(){
        $page_title= "Staff";
        $staff = staff::all();
        return view('staff', compact('page_title','staff'));
        }
}
