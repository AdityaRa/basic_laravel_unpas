<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Index untuk home
    public function home (){
        return view('index');
    }
    //Index untuk about
    public function about (){
        // kata "nama" akan dipakai sebagai variable pada view nantinya IMPORTANT
        
        return view('about',['nama'=>'FarenHated']);
    }
}
