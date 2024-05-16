<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'berkas' => 'required|file|image|max:500',
            'namaFile' => 'required|string|max:255',
        ]);

        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile = $request->namaFile . '.' . $extFile;

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\", "/", $path);

        $pathBaru = asset('gambar/' . $namaFile);

        return redirect()->back()->with([
            'path' => $path,
            'pathBaru' => $pathBaru,
        ]);
    }
}
