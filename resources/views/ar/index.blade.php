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
                           <tr>
                            <th scope ="row">1</th>
                            <td>S-345</td> 
                            <td>PT Bumi Perkasa Jaya</td>
                            <td>Ferdi Juli</td> 
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Delete</a>
                            </td>

                           </tr>
                       </tbody>
                   </table>
               
               

            </div>
        </div>
    </div>
@endsection
   