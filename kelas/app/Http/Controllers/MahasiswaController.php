<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    public function index(){
    	$data_mahasiswa = \App\Mahasiswa::all();
    	return view('mahasiswa.index',['data_mahasiswa'=>$data_mahasiswa]);
    }
    public function create(Request $request){
        \App\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses','Berhasil');
    }
    public function edit($npk)
    {
        $mahasiswa = \App\Mahasiswa::find($npk);
        return view('mahasiswa/edit',['mahasiswa'=>$mahasiswa]);
    }
    public function update(Request $request, $npk)
    {
        $mahasiswa = \App\Mahasiswa::find($npk);
        $mahasiswa->update($request->all());
        return redirect('/mahasiswa')->with('sukses','Berhasil');
    }
    public function delete($npk) {
        $mahasiswa = \App\Mahasiswa::find($npk);
        $mahasiswa->delete($mahasiswa->all());
        return redirect('/mahasiswa')->with('sukses','Berrhasil');
    }
     public function export() {
        return Excel::download(new MahasiswaExport,'mahasiswa.xlsx');
    }
   
}
