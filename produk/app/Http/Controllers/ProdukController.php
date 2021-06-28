<?php

namespace App\Http\Controllers;

use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {

        // panggil model db nya, dan semua isinya, 
        $produk = Produk::all();

        return view('produk.index', ['produk' => $produk]);
    }

    public function tambah() {

        return view('produk.tambah');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required|numeric'
        ]);

        // insert data ke table produk
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/produk');
    }

    public function edit($id) {
        
        $produk = Produk::find($id);

        return view('produk.edit', ['produk' => $produk]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required|numeric'
        ]);


        $produk = Produk::where('id', $request->id);

        // update data ke table produk
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        // alihkan halaman ke halaman produk
        return redirect('/produk');

    }

    public function delete($id) {

        $produk = Produk::find($id);
        $produk->delete();

        // alihkan halaman ke halaman produk
        return redirect('/produk');
    }
}
