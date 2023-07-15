<?php

namespace App\Http\Controllers;

use App\Models\FormPengajuan as ModelsFormPengajuan;
use Illuminate\Http\Request;

class FormPengajuan extends Controller
{


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

        ModelsFormPengajuan::create($data);
        return redirect('form-pengajuan-success');
    }
}
