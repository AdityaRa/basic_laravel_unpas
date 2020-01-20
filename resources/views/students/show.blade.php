<!-- Kasih tau laravel mau ambil template engine di folder mana -->
@extends('layout.template')
<!-- Mengatur Title -->
@section('title','Students')
<!-- Mengatur Isi Container -->

@section('container')
     <div class="container">
        <div class="row">
            <div class="col-6">
               <h1 class="mt-3">Menampilkan Detail Student</h1>
                   {{-- Menampilkan dengan Card --}}
                  <div class="card mt-4">
                    <div class="card-body">
                        {{-- Ambil data yang sudah dikirim StudentsController --}}
                      <h5 class="card-title">{{$students->nomor_surat}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$students->wajib_pajak}}</h6>
                      <h3 class="card-subtitle mb-2 text-muted">{{$students->ar}}</h3>
                      <button type="submit" class="btn btn-primary mr-2">Edit</button>
                      <button type="submit" class="btn btn-danger ">Delete</button>
                      <a href="/students" class="badge badge-info ml-3 ">Back To Reality</a>
                    </div>
                  </div>



                   {{-- Tutup Card --}}
               
                  

            </div>
        </div>
    </div>
@endsection
   