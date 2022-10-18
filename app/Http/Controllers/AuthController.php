<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120148,
            'Name' => 'Muhammad Musyafa Fadila',
            'Phone' => '082192881206',
            'Class' => 'XII RPL 5'
        ];
    }
}
