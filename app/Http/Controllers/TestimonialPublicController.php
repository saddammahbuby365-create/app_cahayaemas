<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialPublicController extends Controller
{
    public function create()
    {
        return view('testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'rating' => 'required|integer|min:1|max:5',
            'pesan'  => 'required|string',
            'foto'   => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('testimonials', 'public');
        }

        // otomatis pending
        $data['is_approved'] = false;

        Testimonial::create($data);

        return redirect()->route('testimoni.create')
            ->with('success', 'Terima kasih! Testimoni Anda akan ditampilkan setelah disetujui admin.');
    }
}
