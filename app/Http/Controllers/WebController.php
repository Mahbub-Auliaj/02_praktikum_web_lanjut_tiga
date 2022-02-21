<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return 'ini adalah halaman home';
    }
    public function category(){
        return 'Terdapat beberapa category pada produk kami';
    }
    public function pakaian(){
        return 'Kami menyediakan baju, celana, rok, dan kebutuhan lain';
    }
    public function peralatandapur(){
        return 'Disini juga menyediakan berbagai macam perlengkapan seperti kompor, panci dan lain lain';
    }
    public function berita($id){
        return 'Berita terbaru hari ini adalah' .$id;
    }
    public function daftarprogram(){
        return 'Kami mempunyai beberapa program';
    }
    public function programpeduli(){
        return 'program ini bertujuan untuk membantu kaum yang kurang mampu';
    }
    public function programmagang(){
        return 'Kami juga menerima mahasiswa fresh graduate untuk bekerja disini';
    }
    public function about(){
        return 'Toko kami menyediakan berbagai keperluan';
    }
}
