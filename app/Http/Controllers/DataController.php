<?php

namespace App\Http\Controllers;

use App\Models\Mutasi;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $mutasiData = Mutasi::all(); // Mengambil semua data mutasi
        return view('data', compact('mutasiData')); // Mengirim data ke tampilan
    }
}