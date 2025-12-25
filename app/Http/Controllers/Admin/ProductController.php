<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'berat' => 'required|numeric',
            'kadar' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $gambar = $request->file('gambar')->store('products', 'public');

        Product::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'berat' => $request->berat,
            'kadar' => $request->kadar,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $gambar,
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'berat' => 'required|numeric',
            'kadar' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar' => 'image|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($product->gambar);
            $product->gambar = $request->file('gambar')
                ->store('products', 'public');
        }

        $product->update($request->except('gambar'));

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil diupdate');
    }

    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->gambar);
        $product->delete();

        return back()->with('success', 'Produk berhasil dihapus');
    }
}
