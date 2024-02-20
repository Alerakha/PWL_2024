<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return 'Nama : Aleron Tsaqif Rakha Rajendra <br> NIM : 2241720113';
    }
    public function articles($Id)
    {
        return 'Halaman artikel dengan ID : ' . $Id;
    }
}
