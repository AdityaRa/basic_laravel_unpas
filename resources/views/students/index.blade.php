<!-- Kasih tau laravel mau ambil template engine di folder mana -->
@extends('layout.template')
<!-- Mengatur Title -->
@section('title','Students')
<!-- Mengatur Isi Container -->

@section('container')
     <div class="container">
        <div class="row">
            <div class="col-6">
               <h1 class="mt-3">Daftar Students</h1>
                   {{-- Daftar --}}

                   <ul class="list-group">
                       @foreach($students as $key)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$key->nomor_surat}}
                        {{$key->wajib_pajak}}
                        {{$key->ar}}
                        {{-- Digunakan untuk bisa menangkap id yang akan ditampilkan --}}
                      <a href="/students/{{$key->id}}" class="badge badge-info">Detail</a>
                    </li>
                       @endforeach
                  </ul>

                   {{-- Akhir Dari Suatu Daftar --}}
               
                  

            </div>
        </div>
    </div>
@endsection
   