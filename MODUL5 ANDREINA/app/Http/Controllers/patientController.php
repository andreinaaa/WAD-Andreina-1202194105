<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patientController extends Controller
{
    public function patients(){
        $pasien = DB::table('table_patients')->get();
        return view('patients',['patients'=>$pasien]);
    }

    public function registrasi(){
        return view('patients/daftar_pasien');
    }
}
