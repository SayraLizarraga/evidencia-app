<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Staff;

class StaffController extends Controller
{
    //

    public function index(){
        $page_title= "Staff";
        $staff = staff::all();
        return view('staff.index', compact('page_title','staff'));
        }
}
