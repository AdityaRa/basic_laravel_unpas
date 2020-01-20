<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Jika ingin menggunakan query builder jangan lupa input ini ya
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // //Menampilkan awal ketika index dipanggil
        // // account_representative merepresentasikan nama table pada database
        // GET DATA QUERY BUILDER
        // $ar = DB::table('account_representative')->get();
        // GET DATA ELOQUENT
        $ar =\App\Student::all();
         dump($ar);
        // // kirim data yang sudah diambil dari database ke view dengan variable $ar
        return view('ar.index', ['ar' => $ar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Membuat suatu data baru dengan mengisi form atau semacamnya
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menyimpan data baru yang sebelumnya udah diisi formnya
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan 1 data secara penuh
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengedit data atau mengubah data yang sudah ada dengan mengisi form
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
        //menyimpan kembali data yang sudah diisi form editnya
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data yang sudah ada
    }
}
