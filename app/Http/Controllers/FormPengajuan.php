<?php

namespace App\Http\Controllers;

use App\Models\FormPengajuan as ModelFormPengajuan;

use Illuminate\Http\Request;

class FormPengajuan extends Controller
{

    // Method index -> Menampilkan form pengajuan
    public function index()
    {
        return view('form-pengajuan', [
            'title' => 'Form Pengajuan',
        ]);
    }

    // Method store -> Menambah data pengajuan
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'nama_pt' => $request->nama_pt,
            'alamat_pt' => $request->alamat_pt,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'pengajuan' => $request->pengajuan,
            'deskripsi' => $request->deskripsi,
        ];

        ModelFormPengajuan::create($data);
        return redirect('form-pengajuan-success');
    }



    // Method success -> Menampilkan halaman form pengajuan success
    public function success()
    {
        return view('form-pengajuan-success', [
            'title' => 'Form Pengajuan Success',
        ]);
    }
}
