<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
class MedicineController extends Controller
{
    public function index(){
   
    }

    public function create() {
        return view ('medicine.new');
    }
    public function store(Request $request) {
        // validate data
        $request->validate([
         'medicine_name' => 'required',
         'price' => 'required'
        ]);
       $medicine = new Medicine;
       $medicine->medicine_name = $request->medicine_name;
       $medicine->price = $request->price;
      $medicine->save();
      return redirect('/admin/dashboard')->withSuccess('New Medicine Created');

    }
    public function edit($id){
        $medicines = Medicine::where('id',$id)->first();
        return view('medicine.edit', ['medicines' => $medicines ]); 
    }
    public function update(Request $request, $id){
        $medicines = Medicine::where('id',$id)->first();
        $medicines->medicine_name = $request->medicine_name;
        $medicines->price = $request->price;
        $medicines->save();
        return redirect('/admin/dashboard');
    }

    public function delete($id){
        $medicines = Medicine::whereId($id)->first();
        $medicines->delete();
        return redirect('/admin/dashboard');
    }

}
