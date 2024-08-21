<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        return view('menus.index', ['menus' => $menu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'desk' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
            // Validasi file gambar
        ]);

        // Mengambil file gambar
        $foto = $request->file('foto');

        // Menyimpan file dengan nama asli ke dalam folder 'public/menus'
        $foto->storeAs('public/menus', $foto->getClientOriginalName());

        // Menyimpan data ke database
        Menu::create([
            'nama' => $request->nama,
            'desk' => $request->desk,
            'foto' => $foto->getClientOriginalName(),
            // Menyimpan nama asli file ke database
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
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $menu = Menu::findOrFail($id);

        // delete the photo from storage
        Storage::delete('public/menus/' . $menu->foto);

        //delete product
        $menu->delete();

        //redirect to index
        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
