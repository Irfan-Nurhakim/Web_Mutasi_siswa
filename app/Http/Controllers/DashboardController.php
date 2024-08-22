<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mutasi;


class DashboardController extends Controller
{
    public function index()
    {

        $totalMutasi = Mutasi::count();
        $mutasiMasuk = Mutasi::all()->count(); // Menghitung semua data yang telah diinput
    
        return view('dashboard', compact('totalMutasi', 'mutasiMasuk'));
        
    }
}
