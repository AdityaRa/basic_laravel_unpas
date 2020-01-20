<!-- Kasih tau laravel mau ambil template engine di folder mana -->
@extends('layout/template')
<!-- Mengatur Title -->
@section('title','Abouttt')
<!-- Mengatur Isi Container -->

@section('container')
     <div class="container">
        <div class="row">
            <div class="col-10">
               <h1 class="mt-3">Hello, Aboutt!</h1>
               <!-- Contoh Ambil Data Dari web.php dan mengeluarkannya -->
               <h1 class="mt-3">Hello, {{$nama}} </h1>
            </div>
        </div>
    </div>
@endsection
   