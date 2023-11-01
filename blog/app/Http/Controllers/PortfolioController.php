<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan halaman portofolio
        return view('portfolio.index');
    }
}
