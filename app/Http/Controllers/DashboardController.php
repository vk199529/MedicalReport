<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class DashboardController extends Controller
{
    public function dashboard() {
        $medicines = Medicine::all();
        // latest()->paginate(3);
   // print_r($medicines);
   return view('admin.dashboard',['medicines' => $medicines]);
    }
    
}
