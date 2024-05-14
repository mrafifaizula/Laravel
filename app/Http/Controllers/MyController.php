<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce(){
        $data = [
            "Nama" => "asep",
            "Alamat" => "Bandung",
            "Agama" => "Islam",
            "Jk" => "L",
            "Hobi" => [
                "Macing", "Ngurek", "Menganyam",
            ],
        ];
        return view('latihan.perkenalan', compact('data'));        
    }
    public function animals()
    {

        $animal = [
            "Lion", "Crocodile","Rabbit","Eagle",
        ];
        return view('latihan.animal', ['hewan' => $animal]);
    }
}
