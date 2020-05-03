<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function created(){
        return view('forminputprofil');
    }

    public function savecreate(Request $request){
        DB::table('table_profil') -> insert([
            'Nama' => $request['xnama'],
            'Alamat' => $request['xalamat'],
            'Agama' => $request['xagama'],
            'TTL' => $request['xttl'],
            'Handphone' => $request['xhp'],
        ]);

        return redirect('readprofil');
    }

    public function read(){
        $biodata = DB::table('table_profil') -> get();
        return view('readprofil', compact('biodata'));
    }

    public function update($id){
        $biodata = DB::table('table_profil') -> where('id', $id) -> get();
        return view('formupdateprofil', compact('biodata'));
    }

    public function saveupdate(Request $request){
        DB::table('table_profil') -> update([
            'Nama' => $request['xnama'],
            'Alamat' => $request['xalamat'],
            'Agama' => $request['xagama'],
            'TTL' => $request['xttl'],
            'Handphone' => $request['xhp'],
        ]);

        return redirect('readprofil');
    }

    public function delete($id){
        DB::table('table_profil') -> where('id',$id)->delete();
        return redirect('readprofil');
    }
}
