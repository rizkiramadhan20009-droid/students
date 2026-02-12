<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return "User Index";
    }

    // public function show($id)
    // {
    //     return "Menampilkan user dengan ID: $id";
    // }
}
