<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;

class LapanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Lapangan::all();
        return view("lapangan.index", compact("data"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("lapangan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "image" => "required|image|mimes:png,jpg,jpeg",
            "nama_lapangan" => "required",
            "nomor_kontak" => "required",
            "alamat" => "required",
            "status" => "required",
        ]);

        $input = $request->all();

        //upload gambar
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = "$postImage";
        }

        Lapangan::create($input);
        return redirect()->route("lapangan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Lapangan $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lapangan $lapangan)
    {
        return view("lapangan.edit", compact("lapangan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lapangan $lapangan)
    {
        $request->validate([
            "nama_lapangan" => "required",
            "nomor_kontak" => "required",
            "alamat" => "required",
            "status" => "required",
            "image" => "image|mimes:png,jpg,jpeg",
        ]);

        $input = $request->except('image');
        if ($request->hasFile('image')) {
            $destinationPath = 'images/';

            if ($lapangan->image && file_exists($destinationPath . $lapangan->image)) {
                unlink($destinationPath . $lapangan->image);
            }

            $image = $request->file('image');
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = $postImage;
        }

        $lapangan->update($input);
        return redirect()->route("lapangan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lapangan $lapangan)
    {
        $lapangan->delete();
        return to_route("lapangan.index")->with("success", "Data berhasil disimpan");
    }
}
