<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{

    public function penjumlahan(){
        $panjang=10;
        $lebar=5;
        $luas=$panjang*$lebar;
        $keliling=(2*$panjang) * (2*$lebar);

        //echo "Luas Segi Empat" ".$luas;
        return view('latihan ',[
                                'luasnya'=>$luas,
                                'luasnya'=>$keliling]);



    }
    //latihan
    public function formhitung (){
           return view('formhitung');
    }
    public function formhiting_post(request $requst) {
        $panjang=$requst->panjang;
        $lebar=$requst->lebar;
        $luas=$panjang*$lebar;
        return view ('proses_formhitung',['luas'=>$luas]);
    }
}
