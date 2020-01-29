<?php

namespace App\Http\Controllers;

use App\Gambar;
use Illuminate\Http\Request;

//Upload Gambar
class UploadController extends Controller
{
    public function upload(){
        $gambars = Gambar::get();
		return view('uploadgambar',['gambars' => $gambars]);
    }

    public function proses_upload(Request $request){
		$this->validate($request, [
            'file' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';

                // upload file

        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file);

        Gambar::create([
            'file' => $nama_file,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
		    'keterangan' => $request->keterangan,
        ]);


        return redirect()->back();

	}

}
