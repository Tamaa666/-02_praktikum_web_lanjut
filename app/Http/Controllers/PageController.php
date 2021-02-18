<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function awal(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama: Arjuna Pratama Putra NIM: 1941720155 Kelas: TI-2A';
    }
}
