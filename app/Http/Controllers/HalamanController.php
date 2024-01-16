<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;


class HalamanController extends Controller
{
    public function index()
    {
        $data = Lapangan::all();
        return view("halaman.index", compact('data'));
    }
}
