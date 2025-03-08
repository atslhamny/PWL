<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return ('Nama : Atsilah Amany Putri Harsuma <br>
            NIM : 2341760011');
    }
}
