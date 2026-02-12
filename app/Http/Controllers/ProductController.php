<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function index()
 {
    return view('riz');
 }
 public function show($id)
 {
    return "Menampilkan produk dengan ID: $id";
 }
}
