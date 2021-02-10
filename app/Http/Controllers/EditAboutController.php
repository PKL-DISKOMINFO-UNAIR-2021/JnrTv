<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EditAboutController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$about = DB::table('about')->get();
 
    	// mengirim data pegawai ke view index
    	return view('admin.admin_about',['about' => $about]);
 
    }
    // method untuk menampilkan view form tambah pegawai
public function tambah()
{
 
	// memanggil view tambah
	return view('admin.tambah_about');
 
}
    public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('about')->insert([
		'title' => $request->judul,
		'content' => $request->content,
		'title_address' => $request->judul2,
		'content_address' => $request->content2
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/about');
 
}
public function edit($id)
    {
        $about = DB::table('about')->where('id',$id)->get();
	// passing data pasien yang didapat ke view edit.blade.php
	return view('admin.edit_about',['about'=> $about]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('about')->where('id',$request->id)->update([
            'title' => $request->judul,
            'content' => $request->content,
            'title_address' => $request->judul2,
            'content_address' => $request->content2
        ]);
	// alihkan halaman ke halaman dokter
	        return redirect('/admin/about')->with('sukses','Data Berhasil Diupdate');
    
    }
    public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('about')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/about');
}
}
