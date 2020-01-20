<!-- Kasih tau laravel mau ambil template engine di folder mana -->
@extends('layout/template')
<!-- Mengatur Title -->
@section('title','AR')
<!-- Mengatur Isi Container -->

@section('container')
     <div class="container">
        <div class="row">
            <div class="col-10">
               <h1 class="mt-3">Daftar AR!</h1>
                   <table class="table">
                       {{-- Kepala table --}}
                       <thead class="thead-dark">
                           <tr>
                            <th scope ="col">#</th>
                            <th scope ="col">Nomor Surat</th>
                            <th scope ="col">Nama Wajib Pajak</th>
                            <th scope ="col">Nama AR</th>
                            <th scope ="col">Aksi</th>
                           </tr>
                       </thead>
                       {{-- Badan table --}}
                       <tbody>
                           {{-- mengambil data yang sudah dilempar dari controller dengan variable $ar --}}
                           {{-- variable $key disini hanya untuk sebagai variable dalam view saja --}}
                           @foreach($ar as $key)
                           <tr>
                            {{-- memanggil variable berulang untuk memberi number saja --}}
                           <th scope ="row">{{$loop->iteration}}</th>
                            {{-- memanggil semua baris yang ada pada table --}}
                            <td>{{$key->nomor_surat}}</td> 
                            <td>{{$key->wajib_pajak}}</td>
                            <td>{{$key->ar}}</td> 
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>
                           </tr>
                           @endforeach
                       </tbody>
                   </table>
               
               

            </div>
        </div>
    </div>
@endsection
   