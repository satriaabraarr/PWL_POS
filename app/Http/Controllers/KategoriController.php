<?php

namespace App\Http\Controllers;

use illuminate\Http\RedirectResponse;
use illuminate\Http\Request;
use illuminate\View\View;

class KategoriController extends Controller
{
    public function create() : View
    {
        return view('kategori.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'kategori_kode' => 'bail|required',
            'kategori_nama' => 'bail|required',
        ]);

        return redirect('/kategori');
    }

}