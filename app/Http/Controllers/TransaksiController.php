<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::with('namecustomer')->orderBy('created_at', 'desc')->get();
        return view("transaksi.index", compact("data"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_name = Customer::all();
        return view("transaksi.create", compact('data_name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_customer" => "required",
            "total_bayar" => "required",
            "jam_mulai" => "required",
            "jam_selesai" => "required",
            "tanggal_boking" => "required",
        ]);

        Transaksi::create($request->all());
        return redirect()->route("transaksi.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        $data_name = Customer::all();
        return view("transaksi.edit", compact("transaksi", "data_name"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            "nama_customer" => "required",
            "total_bayar" => "required",
            "jam_mulai" => "required",
            "jam_selesai" => "required",
            "tanggal_boking" => "required",
        ]);

        $transaksi->update($request->all());
        return to_route("transaksi.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return to_route("transaksi.index")->with("success", "Data berhasil disimpan");
    }
}
