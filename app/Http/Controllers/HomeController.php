<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();

        // 🔥 ambil testimoni yang sudah di-approve saja
        $testimonials = Testimonial::where('is_approved', true)
            ->latest()
            ->get();

        return view('index', compact('products', 'testimonials'));
    }
}
