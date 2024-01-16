<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Lapangan;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Customer::with('boking')->orderBy('created_at', 'desc')->get();
        return view("customer.index", compact("data"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_boking = Lapangan::all();
        return view("customer.create", compact("data_boking"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_customer" => "required",
            "nomer_kontak" => "required|min:12",
            "boking_lapangan" => "required",
            "alamat" => "required",
            "jenis_kelamin" => "required",
        ]);

        Customer::create($request->all());
        return redirect()->route("customer.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $data_boking = Lapangan::all();
        return view("customer.edit", compact("customer", "data_boking"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            "nama_customer" => "required",
            "nomer_kontak" => "required",
            "boking_lapangan" => "required",
            "alamat" => "required",
            "jenis_kelamin" => "required",
        ]);

        $customer->update($request->all());
        return to_route("customer.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return to_route("customer.index")->with("success", "Data berhasil disimpan");
    }
}
