<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vaccineController extends Controller
{
    public function vaccines(){
        $vaccines = DB::table('table_vaccines')->get();
        return view('vaccines/vaccines', ['daftar_vaccines'=> $vaccines]);
    }

    public function daftar(){
        return view('vaccines/daftar');
    }

    public function simpan_daftar(Request $request){
        DB::table('table_vaccines')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image
        ]);
        return redirect('vaccines');
    }

    public function delete($id){
        DB::table('table_vaccines')->where('id', $id)->delete();
        return redirect('vaccines');
    }

    public function edit($id){
        $data_vaksin = DB::table('table_vaccines')->where('id', $id)->get();
        return view('vaccines/edit', ['data_vaksin'=>$data_vaksin]);
    }

    public function update(Request $request){
        DB::table('table_vaccines')->where('id', $request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image
        ]);
        return redirect('vaccines');
    }
}