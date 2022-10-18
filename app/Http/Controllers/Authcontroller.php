<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function me(){
        return[
            'NIS' => 3103120176,
            'Nama' => 'Prajna nana',
            'Phone' => '0812 1572 9652'
        ];
    }
}
