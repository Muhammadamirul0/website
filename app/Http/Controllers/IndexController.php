<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd()
        $menus = Menu::all();
        return view('index', ['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'desk' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            // Validasi file gambar
        ]);

        // Mengambil file gambar
        $foto = $request->file('foto');
        $foto->storeAs('public/menus', $foto->hashName());

        // Menyimpan data ke database
        Menu::create([
            'nama' => $request->nama,
            'desk' => $request->desk,
            'foto' => $foto->hashName(),
        ]);

        // Redirect dan kirim pesan sukses
        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
