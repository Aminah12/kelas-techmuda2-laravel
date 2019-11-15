<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\KelasExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class KelasController extends Controller
{
    public function index(){
    	$data_kelas = \App\Kelas::all();
    	return view('kelas.index',['data_kelas'=>$data_kelas]);
    }
    public function create(Request $request){
    	\App\Kelas::create($request->all());
    	return redirect('/kelas')->with('sukses','Berhasil');
    }
    public function edit($id_kelas)
    {
    	$kelas = \App\Kelas::find($id_kelas);
    	return view('kelas/edit',['kelas'=>$kelas]);
    }
    public function update(Request $request, $id_kelas)
    {
    	$kelas = \App\Kelas::find($id_kelas);
    	$kelas->update($request->all());
    	return redirect('/kelas')->with('sukses','Berhasil');
    }
    public function delete($id_kelas) {
    	$kelas = \App\Kelas::find($id_kelas);
    	$kelas->delete($id_kelas);
    	return redirect('/kelas')->with('sukses','Berrhasil');
    }

    public function export() {
    	return Excel::download(new KelasExport,'kelas.xlsx');
    }
    public function exportpdf() {
        $kelas = \App\Kelas::all();
        $pdf = PDF::loadView('export.kelaspdf',['kelas' => $kelas]);
        return $pdf->download('kelas.pdf');
    }

    public function upload(){
        return view('/kelas/upload');
    }
 
    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required',
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
 
                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        return redirect('/kelas')->with('sukses','Berhasil');
    }
}
