<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patientController extends Controller
{
    public function landing(){
        $landing = DB::table('table_patients')->get();
        $pasien_reg = DB::table('table_patients')
            ->join('table_vaccines', 'table_patients.vaccine_id', '=', 'table_vaccines.id')
            ->select('table_patients.*', 'table_vaccines.name as nama_vaksin')
            ->get();
        return view('patient/pasienLanding', ['registrasi'=> $pasien_reg]);
    }

    public function daftar_pasien(){
        return view('patient/daftar_pasien');
    }

    public function selectVaccine(){
        $jenisVaksin = DB::table('table_vaccines')->get();
        return view('patient/selectVaccine', ['jenisVaksin'=> $jenisVaksin]);
    }

    public function tambahPasien($id){
        $jenisVaksin = DB::table('table_vaccines')->where('id', $id)->get();
        return view('patient/daftar_pasien', ['jenisVaksin'=> $jenisVaksin]);
    }

    public function regisPasien(Request $request){
        DB::table('table_patients')->insert([
            'vaccine_id' => $request->vaccine_id,
            'name' => $request->name,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'image_ktp' => $request->image_ktp,
            'no_hp' => $request->no_hp
        ]);
        return redirect('/patients');
    }

    public function updatePasien($id){
        $data_pasien = DB::table('table_patients')->where('id', $id)->get();
        return view('patient/updatePasien', ['data_pasien'=>$data_pasien]);
    }

    public function pasien_update(Request $request){
        DB::table('table_patients')->where('id', $request->id)->update([
            'vaccine_id' => $request->vaccine_id,
            'name' => $request->name,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'image_ktp' => $request->image_ktp,
            'no_hp' => $request->no_hp
        ]);
        return redirect('/patients');
    }

    public function delete($id){
        DB::table('table_patients')->where('id', $id)->delete();
        return redirect('/patients');
    }
    // public function r(){
    //     return view('patients/daftar_pasien');
    // }
}
