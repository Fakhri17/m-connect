<?php

namespace App\Http\Controllers;

use App\Models\FormPengajuan as ModelFormPengajuan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // order by created_at desc
        $data = ModelFormPengajuan::orderBy('created_at', 'desc')->get();
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard/detail-pengajuan', [
            'title' => 'Detail Pengajuan',
            'data' => ModelFormPengajuan::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        ModelFormPengajuan::where('status', 'rejected')->delete();
        return redirect()->route('dashboard');
    }


    /**
     * Update status value.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function statusUpdate($type, $id)
    {
        $data = ModelFormPengajuan::find($id);
        $data->status = $type;
        $data->save();
        return redirect('dashboard');
    }
}
